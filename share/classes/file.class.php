<?php
/**
 * 
 * @abstract This file is part of curriculum - http://www.joachimdieterich.de
 * @package core
 * @filename file.class.php
 * @copyright 2013 Joachim Dieterich
 * @author Joachim Dieterich
 * @date 2013.06.09 21:06
 * @license 
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by  
 * the Free Software Foundation; either version 3 of the License, or (at your option) any later version. 
 *                                                                       
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of        
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details:
 *                                                                       
 * http://www.gnu.org/copyleft/gpl.html      
 */
class File {
    /**
     * id of file
     * @var int
     */
    public $id;
    /**
     * title of file
     * @var string 
     */
    public $title;
    /**
     * filename
     * @var string
     */
    public $filename; 
    /**
     * Array of file versions
     * @var string 
     */

    public $file_version;
    /**
     * Description of file
     * @var string
     */
    public $description; 
    /**
     * filetype
     * @var string 
     */
    public $type; 
    /**
     * filepath
     * @var string 
     */
    public $path; 
    public $full_path;
    /**
     * id of context
     * @var int 
     */
    public $context_id; 
    /**
     * context depending path
     * @var string 
     */
    public $context_path; 
    public $file_context;
    /**
     * timestamp when file was created
     * @var timestamp
     */
    public $creation_time; 
    /**
     * ID of User who created this file
     * @var int
     */
    public $creator_id; 
    /**
     * firstname of creator
     * @var string 
     */
    public $firstname; 
    /**
     * lastname of creator
     * @var string 
     */
    public $lastname;
    /**
     * author of file 
     * @since 0.9
     * @var string
     */
    public $author; 
        /**
     * licence
     * @since 0.9
     * @var string
     */
    public $licence; 
    /**
     * id of curriculum
     * @var int
     */
    public $curriculum_id; 
    /**
     * id of terminal objective
     * @var int
     */
    public $terminal_objective_id; 
    /**
     * id of enabling objective
     * @var int
     */
    public $enabling_objective_id; 
    public $hits;
    /**
     * add file
     * @return mixed 
     */
    public function add(){
        global $USER, $LOG;
        if (checkCapabilities('file:upload', $USER->role_id, false) OR checkCapabilities('file:uploadAvatar', $USER->role_id, false));
        $db             = DB::prepare('INSERT INTO files (title, filename, description, author, licence, type, path, context_id, file_context, creator_id, cur_id, ter_id, ena_id) 
                            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)');
        if($db->execute(array($this->title, $this->filename, $this->description, $this->author, $this->licence, $this->type, $this->path, $this->context_id, $this->file_context, $this->creator_id, $this->curriculum_id, $this->terminal_objective_id, $this->enabling_objective_id))){
            $db         = DB::prepare('SELECT id from files WHERE title = ? AND filename = ? AND description = ? AND author = ?');
            $db->execute(array($this->title, $this->filename, $this->description, $this->author));
            $result     = $db->fetchObject();
            $this->id   = $result->id;
            $LOG->add($USER->id, 'uploadframe.php', dirname(__FILE__), 'Context: '.$this->context_id.' Upload: '.$this->path.''.$this->filename);
            return $this->id; 
        } else {
            return false; 
        } 
    }

    /**
     * Update file
     * @return boolean 
     */
    public function update(){
        global $USER;
        checkCapabilities('file:update', $USER->role_id);
        $db = DB::prepare('UPDATE files SET title = ?, filename = ?, description = ?, author = ?, type = ?, path = ?, context_id = ?, creator_id = ?, cur_id = ?, ter_id = ?, ena_id = ? WHERE id = ?');
        return $db->execute(array($this->title, $this->filename, $this->description, $this->author, $this->licence, $this->type, $this->path, $this->context_id, $this->creator_id, $this->curriculum_id, $this->terminal_objective_id, $this->enabling_objective_id, $this->id));
    }

    /**
     * Delete file
     * @return mixed 
     */
    public function delete(){
        global $CFG, $USER, $LOG;
        checkCapabilities('file:delete', $USER->role_id);
        $this->load();
        $db = DB::prepare('DELETE FROM files WHERE id=?');
        if ($db->execute(array($this->id))){/* unlink file*/
            switch ($this->context_id) {
                case 1: $path = $CFG->user_root.$this->path; 
                    break;
                case 2: if ($this->enabling_objective_id === '-1'){ // Terminal objective
                            $path = $CFG->curriculum_root.$this->curriculum_id.'/'.$this->terminal_objective_id.'/'; //Datei vom Server löschen     
                        } else {// enabling objecitve
                            $path = $CFG->curriculum_root.$this->curriculum_id.'/'.$this->terminal_objective_id.'/'.$this->enabling_objective_id.'/'; //Datei vom Server löschen     
                        }
                    break;
                case 3: $path = $CFG->user_root.$this->path; // evtl erst checken, ob Avatar verwendet wird.
                    break;
                case 4: $path = $CFG->solutions_root.$this->path; 
                    break;
                case 5: $path = $CFG->subjects_root; 
                    break;
                case 6: $path = $CFG->badges_root; 
                    break; 
                case 7: $path = $CFG->user_root.$this->path; 
                    break;
                case 8: $path = $CFG->backup_root.$this->path; 
                    break;
                case 9: $path = $CFG->institutions_root.$this->path; 
                    break;

                default: $return = false; 
                    break;
            }
            if ($path) {
                $LOG->add($USER->id, 'uploadframe.php', dirname(__FILE__), 'Context: '.$this->context_id.' Delete: '.$this->path.''.$this->filename);
                if ($this->type == ".url"){ // bei urls muss keine Datei gelöscht werden 
                    return true;
                } else {
                    return $this->deleteVersions($path); 
                }   
            }
        } else {
            return false;
        }
    } 

    public function deleteVersions($path){
        $extension_pos = strrpos($this->filename, '.'); // find position of the last dot, so where the extension starts
        $thumb_xt = substr($this->filename, 0, $extension_pos) . '_xt.png';
        $thumb_t  = substr($this->filename, 0, $extension_pos) . '_t.png';
        $thumb_qs = substr($this->filename, 0, $extension_pos) . '_qs.png';
        $thumb_xs = substr($this->filename, 0, $extension_pos) . '_xs.png';
        $thumb_s  = substr($this->filename, 0, $extension_pos) . '_s.png';
        $thumb_m  = substr($this->filename, 0, $extension_pos) . '_m.png';
        $thumb_l  = substr($this->filename, 0, $extension_pos) . '_l.png';

        if (file_exists($path.$thumb_xt))           { unlink($path.$thumb_xt); }
        if (file_exists($path.$thumb_t))            { unlink($path.$thumb_t); }
        if (file_exists($path.$thumb_qs))           { unlink($path.$thumb_qs); }
        if (file_exists($path.$thumb_xs))           { unlink($path.$thumb_xs); }
        if (file_exists($path.$thumb_s))            { unlink($path.$thumb_s); }
        if (file_exists($path.$thumb_m))            { unlink($path.$thumb_m); }
        if (file_exists($path.$thumb_l))            { unlink($path.$thumb_l); }
        if (file_exists($path.$this->filename))     { return (unlink($path.$this->filename)); }
    }

    /**
     * Load file with id $this->id 
     */
    public function load(){
        $db = DB::prepare('SELECT fl.*, ct.path AS context_path FROM files AS fl, context AS ct WHERE fl.context_id = ct.context_id AND fl.id = ?');
        $db->execute(array($this->id));
        $result = $db->fetchObject();
        if (isset($result->id)){
            $this->id                    = $result->id;
            $this->title                 = $result->title;
            $this->filename              = $result->filename;
            if (empty($this->title)){
               $this->title             =  $result->filename;
            }
            $this->description           = $result->description;
            $this->author                = $result->author;
            $this->licence               = $result->licence;
            $this->path                  = $result->path;
            $this->type                  = $result->type;
            $this->context_id            = $result->context_id;
            if (isset($result->context_path)){
                $this->context_path      = $result->context_path;
            }
            $this->file_version          = $this->getFileVersions(); // muss unter context_path stehen!
            $this->full_path             = $this->context_path.$this->path.$this->filename;    
            $this->curriculum_id         = $result->cur_id;
            $this->terminal_objective_id = $result->ter_id;
            $this->enabling_objective_id = $result->ena_id;
            $this->creation_time         = $result->creation_time;
            $this->creator_id            = $result->creator_id;   
            if (isset($result->hits)){
                $this->hits              = $result->hits;
            }
        }
    }
    
    public function renderFile($id = false, $context = false){
        global $USER, $CFG;
        if ($id != false){ $this->id = $id; }
        $this->load();
        if (checkCapabilities('plugin:useEmbeddableGoogleDocumentViewer', $USER->role_id, false) AND !is_array(getimagesize($CFG->curriculumdata_root.$this->full_path))){
            $r = '<iframe src="http://docs.google.com/gview?url='.$CFG->access_token_url .$this->addFileToken($this->id).'&embedded=true" style="width:100%; height:500px;" frameborder="0"></iframe><div class="space-left">'.Render::filenail($this, 'mail', false, false, false, true).'</div>';
        } else if (is_array(getimagesize($CFG->curriculumdata_root.$this->full_path)) OR $this->type == '.pdf') {
            $r = '<img src="'.$CFG->access_file_url.$this->full_path.'"><br><div class="space-left" >'.Render::filenail($this, 'mail', false, false, false, true).'</div>';
        } else {
            $r = '<div class="space-left">'.Render::filenail($this, 'mail', false, false, false, true).'</div>';
        }
        
        if ($context == 'message'){
            return '<p>'.$r.'</p>';
        } else {
            return $r;
        }
    }
    
    public function addFileToken(){
        $fileToken = getToken();
        $db = DB::prepare('INSERT INTO file_token (file_id, token) VALUES (?,?)');
        $db->execute(array($this->id, $fileToken));
         
        return $fileToken;
    }
   
    public function getFileID($fileToken){
        $db = DB::prepare('SELECT file_id FROM file_token WHERE token = ?');
        $db->execute(array($fileToken));
        $result = $db->fetchObject();
        if ($result){
            return $result->file_id;
        } else {
            return $result;
        }
    }
   
    public function deleteFileToken($token){
        $fileToken = getToken();
        $db = DB::prepare('DELETE FROM file_token WHERE token=?');
        $db->execute(array($token));
    }

    /**
     * returns existing file version
     * @return array of strings
     */
    public function getFileVersions(){
        global $CFG;
        $extension_pos = strrpos($this->filename, '.'); // find position of the last dot, so where the extension starts

        $thumb_xt = substr($this->filename, 0, $extension_pos) . '_xt.png';
        $thumb_t  = substr($this->filename, 0, $extension_pos) . '_t.png';
        $thumb_qs = substr($this->filename, 0, $extension_pos) . '_qs.png';
        $thumb_xs = substr($this->filename, 0, $extension_pos) . '_xs.png';
        $thumb_s  = substr($this->filename, 0, $extension_pos) . '_s.png';
        $thumb_m  = substr($this->filename, 0, $extension_pos) . '_m.png';
        $thumb_l  = substr($this->filename, 0, $extension_pos) . '_l.png';
        
        if (file_exists($CFG->curriculumdata_root.$this->context_path.$this->path.$thumb_xt)){ 
            $result['xt'] = array("filename" => $thumb_xt, "full_path" => $this->context_path.$this->path.$thumb_xt, "size" => human_filesize(filesize($CFG->curriculumdata_root.$this->context_path.$this->path.$thumb_xt))); }
        if (file_exists($CFG->curriculumdata_root.$this->context_path.$this->path.$thumb_t)) { 
            $result['t'] = array("filename" => $thumb_t, "full_path" => $this->context_path.$this->path.$thumb_t, "size" => human_filesize(filesize($CFG->curriculumdata_root.$this->context_path.$this->path.$thumb_t))); }
        if (file_exists($CFG->curriculumdata_root.$this->context_path.$this->path.$thumb_qs)){ 
            $result['qs'] = array("filename" => $thumb_qs, "full_path" => $this->context_path.$this->path.$thumb_qs, "size" => human_filesize(filesize($CFG->curriculumdata_root.$this->context_path.$this->path.$thumb_qs))); }
        if (file_exists($CFG->curriculumdata_root.$this->context_path.$this->path.$thumb_xs)){ 
            $result['xs'] = array("filename" => $thumb_xs, "full_path" => $this->context_path.$this->path.$thumb_xs, "size" => human_filesize(filesize($CFG->curriculumdata_root.$this->context_path.$this->path.$thumb_xs))); }
        if (file_exists($CFG->curriculumdata_root.$this->context_path.$this->path.$thumb_s)) { 
            $result['s'] = array("filename" => $thumb_s, "full_path" => $this->context_path.$this->path.$thumb_s, "size" => human_filesize(filesize($CFG->curriculumdata_root.$this->context_path.$this->path.$thumb_s))); }
        if (file_exists($CFG->curriculumdata_root.$this->context_path.$this->path.$thumb_m)) { 
            $result['m'] = array("filename" => $thumb_m, "full_path" => $this->context_path.$this->path.$thumb_m, "size" => human_filesize(filesize($CFG->curriculumdata_root.$this->context_path.$this->path.$thumb_m))); }
        if (file_exists($CFG->curriculumdata_root.$this->context_path.$this->path.$thumb_l)) { 
            $result['l'] = array("filename" => $thumb_l, "full_path" => $this->context_path.$this->path.$thumb_l, "size" => human_filesize(filesize($CFG->curriculumdata_root.$this->context_path.$this->path.$thumb_l))); }
        
            if (isset($result)) {
            return $result; 
        } else {return false;}

    }
    /**
     * get Solutions depending on dependency
     * @param string $dependency
     * @param inst $course_id
     * @param string $user_ids 
     */
    public function getSolutions($dependency = null, $user_ids = null, $curriculum_id = null){
        global $USER;
        checkCapabilities('file:getSolutions', $USER->role_id, false);
        switch ($dependency) {
            case 'course':  if (is_array($user_ids)){
                                $user_ids = implode(", ", $user_ids);
                            }
                            $db = DB::prepare('SELECT fl.*, us.firstname, us.lastname FROM files AS fl, users AS us
                                WHERE fl.cur_id = ? AND fl.creator_id IN ('.$user_ids.')
                                AND fl.creator_id = us.id AND fl.context_id = 4');
                            $db->execute(array($curriculum_id));  
                            break;

            case 'artefacts':  if (is_array($user_ids)){
                                $user_ids = implode(", ", $user_ids);
                            }
                            $db = DB::prepare('SELECT fl.*, us.firstname, us.lastname FROM files AS fl, users AS us
                                WHERE fl.creator_id IN ('.$user_ids.')
                                AND fl.creator_id = us.id');
                            $db->execute();  
                            break;

            default:        break;
        }
        $files = array(); //Array of files
        while($result = $db->fetchObject()) { 
                $this->id                    = $result->id;
                $this->title                 = $result->title;
                $this->filename              = $result->filename;
                if (empty($this->title)){
                    $this->title             =  $result->filename;
                 }
                $this->description           = $result->description;
                $this->author                = $result->author;
                $this->licence               = $result->licence;
                $this->path                  = $result->path;
                $this->type                  = $result->type;
                $this->context_id            = $result->context_id;
                $this->curriculum_id         = $result->cur_id;
                $this->terminal_objective_id = $result->ter_id;
                $this->enabling_objective_id = $result->ena_id;
                $this->creation_time         = $result->creation_time;
                $this->creator_id            = $result->creator_id;
                $this->firstname             = $result->firstname;
                $this->lastname              = $result->lastname;
                if (isset($result->hits)){
                    $this->hits              = $result->hits;
                }
                $files[] = clone $this;        //it has to be clone, to get the object and not the reference
        } 
        if (isset($files)) {  
            return $files;
        } else {return false;}
    }

    /**
     * get files depending on dependency
     * @param string $dependency
     * @param int $id
     * @return array of file objects|boolean 
     */
    public function getFiles($dependency = null, $id = null, $paginator = '', $getExternalFiles = false){
        global $USER;
        $order_param = orderPaginator($paginator, array('title'         => 'fl', 
                                                        'description'   => 'fl',
                                                        'author'        => 'fl')); 
        switch ($dependency) {
            case 'context':             $db = DB::prepare('SELECT fl.*, ct.path AS context_path FROM files AS fl, context AS ct
                                                        WHERE fl.context_id = ? AND fl.context_id = ct.context_id '.$order_param);
                $db->execute(array($id));
                break;
            case 'userfiles':           $db = DB::prepare('SELECT fl.*, ct.path AS context_path FROM files AS fl, context AS ct
                                                        WHERE fl.creator_id = ? AND fl.context_id = 1 AND fl.context_id = ct.context_id '.$order_param);
                $db->execute(array($id));
                break;
            case 'curriculum':          $db = DB::prepare('SELECT fl.*, ct.path AS context_path FROM files AS fl, context AS ct
                                                        WHERE fl.cur_id = ? AND fl.context_id = 2 AND fl.context_id = ct.context_id '.$order_param);
                $db->execute(array($id));
                break;
            case 'terminal_objective':  $db = DB::prepare('SELECT DISTINCT fl.*, ct.path AS context_path FROM files AS fl, context AS ct
                                                            WHERE fl.ter_id = ? AND fl.ena_id = "-1" AND fl.context_id = 2 AND fl.context_id = ct.context_id
                                                            AND( fl.file_context = 1 /*Global Material*/
                                                            OR ( fl.file_context = 2 AND fl.creator_id = ANY (SELECT user_id from institution_enrolments WHERE institution_id = ? )) /*Institutional Material*/
                                                            OR ( fl.file_context = 3 AND fl.creator_id = ANY (SELECT user_id from groups_enrolments WHERE group_id = ANY (Select group_id from groups_enrolments WHERE user_id = ?))) /*Group Material*/
                                                            OR ( fl.file_context = 4 AND fl.creator_id = ?)) /*My Material*/
                                                            ORDER BY fl.file_context ASC');
                $db->execute(array($id, $USER->institution_id, $USER->id, $USER->id));
                $getExternalFiles = true; 
                break;
            case 'enabling_objective':  $db = DB::prepare('SELECT fl.*, ct.path AS context_path FROM files AS fl, context AS ct
                                                            WHERE fl.ena_id = ? AND fl.context_id = 2 AND fl.context_id = ct.context_id 
                                                              AND( fl.file_context = 1 /*Global Material*/
                                                              OR ( fl.file_context = 2 AND fl.creator_id = ANY (SELECT user_id from institution_enrolments WHERE institution_id = ? )) /*Institutional Material*/
                                                              OR ( fl.file_context = 3 AND fl.creator_id = ANY (SELECT user_id from groups_enrolments WHERE group_id = ANY (SELECT group_id FROM groups_enrolments WHERE user_id = ?))) /*Group Material*/
                                                              OR ( fl.file_context = 4 AND fl.creator_id = ?)) /*My Material*/
                                                         ORDER BY fl.file_context ASC');
                $db->execute(array($id, $USER->institution_id, $USER->id, $USER->id));
                $getExternalFiles = true; 
                break;                  
            
            case 'avatar':              $db = DB::prepare('SELECT fl.*, ct.path AS context_path FROM files AS fl, context AS ct
                                                        WHERE fl.creator_id = ? AND fl.context_id = 3 AND fl.context_id = ct.context_id '.$order_param);
                $db->execute(array($id));
                break;
            case 'solution':            $db = DB::prepare('SELECT fl.*, ct.path AS context_path FROM files AS fl, context AS ct
                                                        WHERE fl.cur_id = ? AND fl.context_id = 4 AND fl.context_id = ct.context_id '.$order_param);
                $db->execute(array($id));
                break;
            case 'user':                $db = DB::prepare('SELECT fl.*, ct.path AS context_path FROM files AS fl, context AS ct
                                                        WHERE fl.creator_id = ? AND fl.context_id = ct.context_id '.$order_param);             
                $db->execute(array($id));
                break;
            case 'backup':              $db = DB::prepare('SELECT DISTINCT fl.*, ct.path AS context_path FROM files AS fl, context AS ct, curriculum_enrolments AS ce
                                                        WHERE fl.context_id = 8 AND fl.context_id = ct.context_id AND fl.cur_id = ce.curriculum_id
                                                        AND ce.group_id = ANY (SELECT gr.group_id FROM groups_enrolments AS gr WHERE gr.user_id =  ?) '.$order_param);  
                $db->execute(array($id));
                break;


            default : break; 
        }                      

        ;

        $files = array(); //Array of files
        while($result = $db->fetchObject()) { 
                $this->id                    = $result->id;
                $this->title                 = $result->title;
                $this->filename              = $result->filename;
                if (empty($this->title)){
                    $this->title             =  $result->filename;
                 }
                $this->description           = $result->description;
                $this->author                = $result->author;
                $this->licence               = $result->licence;
                $this->path                  = $result->path;
                $this->type                  = $result->type;
                $this->context_id            = $result->context_id;
                if (isset($result->context_path)){
                    $this->context_path      = $result->context_path;
                }
                
                $this->full_path             = $this->context_path.$this->path.$this->filename;     //??? context path wird über die sql eigentlich schon ermittelt
                $this->file_context          = $result->file_context;
                $this->curriculum_id         = $result->cur_id;
                $this->terminal_objective_id = $result->ter_id;
                $this->enabling_objective_id = $result->ena_id;
                $this->creation_time         = $result->creation_time;
                $this->creator_id            = $result->creator_id;
                $this->file_version          = $this->getFileVersions();
                if (isset($result->hits)){
                    $this->hits              = $result->hits;
                }
                $files[]                     = clone $this;       
        }
           

        if (file_exists('../plugins/omega.class.php') AND $getExternalFiles == true){ // prüfen, ob OMEGA Plugin vorhanden ist.
            $omega_files    = new Omega();
            $allfiles          = $omega_files->getFiles($dependency, $id, $files);
            return $allfiles;
        } else {
            return $files;
        }
       
    }

     /**
     * get context path
     * @param string $context
     * @return string 
     */
    public function getContextPath($value){ //get Context by context name
        $db = DB::prepare('SELECT path FROM context WHERE context = ?');   
        $db->execute(array($value));
        $result = $db->fetchObject();
        if ($result->path) {
            return  $result->path;
        } else {return false;}
    }

    /**
     * get context id
     * @param string $context
     * @return string 
     */
    public function getContextId($context){ //get Context by context name
        $db = DB::prepare('SELECT context_id FROM context WHERE context = ?');
        $db->execute(array($context));
        $result = $db->fetchObject();
        if ($result) {
            return  $result->context_id;
        } else {return false;}
    }
    
    public function getLicence($id = NULL){
        if ($id == NULL){
            $db = DB::prepare('SELECT * FROM file_licence');
            $db->execute();
            while($result = $db->fetchObject()) {
                $values[] = array('value' => $result->id, 'label' => $result->licence);
            }
            return $values;
        } else {
            $db = DB::prepare('SELECT licence FROM file_licence WHERE id = ?');
            $db->execute(array($id));
            $result = $db->fetchObject();
            if ($result) {
                return  $result->licence;
            } else {return false;}
        }
    }

    public function getFileContext($id = NULL){
        if ($id == NULL){
            $db = DB::prepare('SELECT * FROM file_context');
            $db->execute();
            while($result = $db->fetchObject()) {
                $values[] = array('value' => $result->id, 'label' => $result->description);
            }
            return $values;
        } else {
            $db = DB::prepare('SELECT description FROM file_context WHERE id = ?');
            $db->execute(array($id));
            $result = $db->fetchObject();
            if ($result) {
                return  $result->description;
            } else {return false;}
        }
    }
    
    public function hit(){ // hit counter
        $db = DB::prepare('UPDATE files SET hits = hits + 1 WHERE id = ?');
        $db->execute(array($this->id));
    }
    /**
     * Überprüft in den folgenden Tabellen, ob die Datei verknüpft ist: 
     * - certificate    -> logo_id
     * - curriculum     -> icon_id
     * - institution    -> file_id
     * - users          -> avatar_id
     */
    public function isUsed(){
        $occurrence = array();
        $db0 = DB::prepare('SELECT id FROM certificate WHERE logo_id = ?');
        $db0->execute(array($this->id));
        $result0 = $db0->fetchObject();
        if ($result0){
            $occurrence['certificate'] = $result0->id;
        } 
        
        $db1 = DB::prepare('SELECT id FROM curriculum WHERE icon_id = ?');
        $db1->execute(array($this->id));
        $result1 = $db1->fetchObject();
        if ($result1){
            $occurrence['curriculum'] = $result1->id;
        } 
        
        $db2 = DB::prepare('SELECT id FROM institution WHERE file_id = ?');
        $db2->execute(array($this->id));
        $result2 = $db2->fetchObject();
        if ($result2){
            $occurrence['institution'] = $result2->id;
        } 
        
        $db3 = DB::prepare('SELECT id FROM users WHERE avatar_id = ?');
        $db3->execute(array($this->id));
        $result3 = $db2->fetchObject();
        if ($result3){
            $occurrence['users'] = $result3->id;
        } 
        
        return $occurrence;
    }
    /**
     * function used during the install process to set up creator id to new admin
     * @return boolean
     */
    public function dedicate(){ // only use during install
        $db = DB::prepare('UPDATE files SET creator_id = ?');
        return $db->execute(array($this->creator_id));
    }
}