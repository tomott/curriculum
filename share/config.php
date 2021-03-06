<?php
/** This file is part of curriculum - http://www.joachimdieterich.de
* 
* @package core
* @filename config.php - Main configuration file. 
* @copyright  2013 Joachim Dieterich  {@link http://www.joachimdieterich.de}
* @author Joachim Dieterich
* @date 2013.03.08 13:26
* @license:
*
* The MIT License (MIT)
* Copyright (c) 2012 Joachim Dieterich http://www.curriculumonline.de
* 
* Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), 
* to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, 
* and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
* 
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
* 
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF 
* MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, 
* DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR 
* THE USE OR OTHER DEALINGS IN THE SOFTWARE.    
*/
global $CFG, $DB;  
$CFG = new stdClass();

/* Application !IMPORTANT! Do not change manually*/
$CFG->app_title='curriculum';
$CFG->version='0.9.3';
$CFG->app_footer='<a href="http://www.joachimdieterich.de">© Copyright 2014 - Joachim Dieterich.</a>'; 

/* DB Settings */
$CFG->db_host='127.0.0.1';
$CFG->db_user='root';
$CFG->db_password ='root';
$CFG->db_name='lmz_201606';
if ($CFG->db_name != ''){
    $DB = new PDO('mysql:host='.$CFG->db_host.';dbname='.$CFG->db_name.';charset=utf8', $CFG->db_user, $CFG->db_password ); 
    $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $DB->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}
$CFG->ip= 'localhost';
$CFG->protocol                      = 'http://'; //'https://';
$CFG->base_url                      = $CFG->protocol.$CFG->ip.'/curriculum/';         //--> ! darf nicht localhost sein, da sonst probleme bei der Bilddarstellung bei Zugriff von extern
$CFG->curriculumdata_root           = '/Applications/MAMP/curriculumdata/';
/*  Paths - do not edit */
$CFG->document_root                 = dirname(__FILE__).'/../public/';
$CFG->controllers_root              = dirname(__FILE__).'/controllers/'; 
$CFG->plugins_root                  = dirname(__FILE__).'/plugins/'; 
$CFG->user_root                     = $CFG->curriculumdata_root.'user/';
$CFG->curriculum_root               = $CFG->curriculumdata_root.'curriculum/';
$CFG->subjects_root                 = $CFG->curriculumdata_root.'subjects/'; 
$CFG->solutions_root                = $CFG->curriculumdata_root.'solutions/'; 
$CFG->badges_root                   = $CFG->curriculumdata_root.'badges/'; 
$CFG->institutions_root             = $CFG->curriculumdata_root.'institution/'; 
$CFG->backup_root                   = $CFG->curriculumdata_root.'backups/';//URL for backups 
$CFG->sql_backup_root               = $CFG->curriculumdata_root.'backups/sql/';
$CFG->lib_root                      = dirname(__FILE__).'/libs/';
$CFG->demo_root                     = $CFG->curriculumdata_root.'support/demo/';//URL for backups 
//$CFG->salt                          = md5('loYfaz5r4w/ChAR1sJUw09sYkMaALLsOlKKpYb28LAcmFclAM3upsgwjDZ2tNsX2aVB6ZDJkIK6aO0DursPrqg==');
//$CFG->access_file                   = '../share/accessfile.php?file='.$CFG->salt.'|';
$CFG->access_file                   = '../share/accessfile.php?file=';
$CFG->access_file_url               = $CFG->base_url.'share/accessfile.php?file=';
$CFG->access_token_url              = $CFG->base_url.'share/accessfile.php?token=';
$CFG->access_id_url                 = $CFG->base_url.'share/accessfile.php?id=';
$CFG->support_path                  = $CFG->access_file.'support/';
$CFG->subjects_path                 = $CFG->access_file.'subjects/';
$CFG->solutions_path                = $CFG->access_file.'solutions/';
$CFG->curriculum_path               = $CFG->access_file.'curriculum/';
$CFG->avatar_path                   = $CFG->access_file.'user/'; // accessfile ready
$CFG->web_backup_path               = $CFG->access_file.'backups/';

$CFG->request_url                   = implode('/', array_slice(explode('/', $CFG->protocol.filter_input(INPUT_SERVER, 'SERVER_NAME', FILTER_UNSAFE_RAW).filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_UNSAFE_RAW)), 0, -1)).'/';
$CFG->media_url                     = $CFG->request_url.'assets/';
$CFG->lib_url                       = $CFG->request_url.'../share/libs/';

/* Parameter for uploadframe */
$CFG->tb_param                      = '&modal=true&format=1'; 

/* Files */
$CFG->thumbnails                    = true;                                     //generate Thumbnails

;/* Standard Values */
$CFG->acc_days                      = 7; 
$CFG->paginator_limit               = 30; 
$CFG->standard_role                 = 0;  // Schüler!
$CFG->standard_country              = 56; 
$CFG->standard_state                = 11;
$CFG->csv_size                      = 1048576;
$CFG->avatar_size                   = 1048576;
$CFG->material_size                 = 1048576;
$CFG->timeout                       = 30;
$CFG->message_timeout               = 4000; //in millisec.
$CFG->standard_avatar               = 'user/noprofile.jpg';
$CFG->standard_avatar_id            = 0;
$CFG->standard_ins_logo_id          = 1;
$CFG->mail_paginator_limit          = 10;                                       // Limit for mail paginators
/* Paginators - do not edit */
$CFG->paginator_name                = '';                                       // Paginatoren die benutzt wurden
$CFG->paginator_id                  = '';                                       // Paginator-IDs 

$CFG->shibboleth                    = true;                                     // show shibboleth Button in Login.tpl

/* Get php_info('post_max_size') */
$CFG->post_max_size                 = ini_get('post_max_size');

/*  Smarty template engine*/
$CFG->smarty_template_dir           = dirname(__FILE__).'/templates/';
$CFG->smarty_template_compile_dir   = $CFG->smarty_template_dir.'compiled';
$CFG->smarty_template_cache_dir     = $CFG->smarty_template_dir.'cached'; 


/**
 * Writes a custom message to the log file for debugging purposes.
 * The message is prepended with a current timestamp and file identifier.
 *
 * Die Funktion wir hier definiert damit sie von überall aus verfügbar ist
 * @param string $info_message The message to write to the log file.
 */
function log_entry($info_message) { 
    global $CFG;
    if (!$info_message || trim($info_message) == '') {
        return;
    }
    error_log('PHP '.$CFG->app_title.' Message: ('.filter_input(INPUT_SERVER, 'PHP_SELF', FILTER_UNSAFE_RAW).') '.str_replace("\n", "", $info_message));
}