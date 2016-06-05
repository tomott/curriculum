<?php
/**
 * CourseBook
 * 
 * @abstract This file is part of curriculum - http://www.joachimdieterich.de
 * @package core
 * @filename task.class.php
 * @copyright 2016 Joachim Dieterich
 * @author Joachim Dieterich
 * @date 2016.05.18 08:23
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
class Task {

    public $id;
    public $task; 
    public $description; 
    public $creation_time; 
    public $creator_id; 
    public $creator; 
    
    public $timestart;
    public $timeend;
    public $timerange;
    
   
    public function add(){
        global $USER;
        checkCapabilities('task:add', $USER->role_id);
        list ($this->timestart, $this->timeend) = explode(' - ',$this->timerange); // copy timestart and timeend from timerage
        $this->timestart = date('Y-m-d G:i:s', strtotime($this->timestart));
        $this->timeend   = date('Y-m-d G:i:s', strtotime($this->timeend));
        $db = DB::prepare('INSERT INTO task (task,description,timestart,timeend,creator_id) VALUES (?,?,?,?,?)');
        $db->execute(array($this->task, $this->description, $this->timestart, $this->timeend, $this->creator_id));
        return DB::lastInsertId(); //returns id 
    }
    
    public function update(){
        global $USER;
        checkCapabilities('task:update', $USER->role_id);
        list ($this->timestart, $this->timeend) = explode(' - ',$this->timerange); // copy timestart and timeend from timerage
        $this->timestart = date('Y-m-d G:i:s', strtotime($this->timestart));
        $this->timeend   = date('Y-m-d G:i:s', strtotime($this->timeend));
        $db = DB::prepare('UPDATE task SET task = ?, description = ?, timestart = ?, timeend = ?, creator_id = ? WHERE id = ?');
        return $db->execute(array($this->task, $this->description, $this->timestart, $this->timeend, $this->creator_id, $this->id));
    }
    
    public function delete(){
        global $USER;
        checkCapabilities('task:delete', $USER->role_id);
        $db             = DB::prepare('DELETE FROM task WHERE id = ?');
        $ret_task       = $db->execute(array($this->id));
        $db             = DB::prepare('DELETE FROM task_enrolments WHERE task_id = ?');
        $ret_enrolment  =  $db->execute(array($this->id));
        if (($ret_enrolment) == true AND ($ret_task == true)){
            return true;
        } else {
            return false;
        }
    } 
    
    public function load($dependency = 'id', $value = null){
        if (isset($value)){ $v = $value; } else { $v = $this->id; }
        $db = DB::prepare('SELECT * FROM task WHERE '.$dependency.' = ?');
        $db->execute(array($v));
        $result = $db->fetchObject();
        $user = new User();
        if ($result){
            $this->id            = $result->id;
            $this->task          = $result->task;
            $this->description   = $result->description;
            $this->creation_time = $result->creation_time;
            $this->creator_id    = $result->creator_id;
            $this->creator       = $user->resolveUserId($result->creator_id);
            $this->timestart         = $result->timestart;
            $this->timeend           = $result->timeend;
            $this->timerange         = date('d.m.Y G:i', strtotime($this->timestart)) .' - '. date('d.m.Y G:i', strtotime($result->timeend));
            return true;                                                        
        } else { 
            return false; 
        }
    }
    
    /**
     * Get all availible Grades of current institution
     * @return array of Grade objects 
     */
    public function get($dependency = 'user', $id = null, $paginator = ''){
        global $USER;
        $order_param = orderPaginator($paginator, array('task'         => 'tsk',
                                                        'description'   => 'tsk')); 
        $entrys = array();                      //Array of grades
        switch ($dependency) {
            case 'user':            $db = DB::prepare('SELECT tsk.id
                                                        FROM task AS tsk
                                                        WHERE tsk.creator_id = ? '.$order_param );
                                    $db->execute(array($USER->id));
                break;

            case 'coursebook':      $db = DB::prepare('SELECT tsk.id
                                                FROM task AS tsk, task_enrolments AS te, context AS ct
                                                WHERE ct.context = ? 
                                                AND ct.context_id = te.context_id
                                                AND te.reference_id = ?
                                                AND te.task_id = tsk.id '.$order_param );
                                    $db->execute(array('courseBook', $id));
                break;
            
            default:
                break;
        }
        
        
        while($result = $db->fetchObject()) { 
                $this->id            = $result->id;
                $this->load();
                $entrys[]            = clone $this;        //it has to be clone, to get the object and not the reference
        } 
        
        return $entrys;
    }
    
    public function checkEnrolment($context_id, $reference_id, $status = '1'){
        $db = DB::prepare('SELECT count(id) FROM task_enrolments WHERE context_id = ? AND reference_id = ? AND task_id = ? AND status = ?');
        $db->execute(array($context_id, $reference_id, $this->id, $status));
        if ($db->fetchColumn() > 0){
            return true;
        } else {
            return false; 
        }    
    }
    
    public function enrol($context_id, $reference_id){
        global $USER;
        checkCapabilities('task:enrol', $USER->role_id);
        if ($this->checkEnrolment($context_id, $reference_id, 0)) {
            $db = DB::prepare('UPDATE task_enrolments SET status = 1, creator_id = ?, creation_time = NOW()
                                WHERE context_id = ? AND reference_id = ? AND task_id = ?'); //Status 1 == eingeschrieben
            return $db->execute(array($USER->id, $context_id, $reference_id, $this->id)); 
        } else {
            $db = DB::prepare('INSERT INTO task_enrolments (status,context_id,reference_id,task_id,creator_id) 
                                VALUES (1,?,?,?,?)');//Status 1 == eingeschrieben
            return $db->execute(array($context_id, $reference_id, $this->id, $USER->id));
        }
    }
    
    
    /**
    * function used during the install process to set up creator id to new admin
    * @return boolean
    */
    public function dedicate(){ // only use during install
        $db = DB::prepare('UPDATE task SET  creator_id = ?');        
        return $db->execute(array($this->creator_id));
    }
}