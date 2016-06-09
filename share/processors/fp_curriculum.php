<?php
/** This file is part of curriculum - http://www.joachimdieterich.de
 * FormProcessor
 * @package core
 * @filename fp_curriculum.php
 * @copyright 2016 Joachim Dieterich
 * @author Joachim Dieterich
 * @date 2016.05.28 18:06
 * @license: 
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by  
 * the Free Software Foundation; either version 3 of the License, or (at your option) any later version.                                   
 *                                                                       
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of        
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details:                          
 *                                                                       
 * http://www.gnu.org/copyleft/gpl.html      
 */
include(dirname(__FILE__).'/../setup.php');  // Klassen, DB Zugriff und Funktionen
include(dirname(__FILE__).'/../login-check.php');  //check login status and reset idletimer
global $USER, $CFG;
$USER            = $_SESSION['USER'];
if (!isset($_SESSION['PAGE']->target_url)){     //if target_url is not set -> use last PAGE url
    $_SESSION['PAGE']->target_url       = $_SESSION['PAGE']->url;
}

$gump            = new Gump();    /* Validation */
$_POST           = $gump->sanitize($_POST);       //sanitize $_POST

// todo alle Regeln definieren
$gump->validation_rules(array(
'curriculum'     => 'required',
'description'    => 'required',
'subject_id'     => 'required',
'grade_id'       => 'required',
'schooltype_id'  => 'required',
'state_id'       => 'required',
'country_id'     => 'required',
'icon_id'        => 'required'   
));
$validated_data  = $gump->run($_POST);
if (!isset($_POST['state'])){ $_POST['state'] = 1; }
if($validated_data === false) {/* validation failed */
    $_SESSION['FORM']            = new stdClass();
    $_SESSION['FORM']->form      = 'curriculum'; 
    $_SESSION['FORM']->error     = $gump->get_readable_errors();
    $_SESSION['FORM']->func      = $_POST['func'];
} else {
    $curriculum = new Curriculum();
    if (isset($_POST['id'])){
        $curriculum->id         = filter_input(INPUT_POST, 'id',          FILTER_VALIDATE_INT);
    }
    $curriculum->curriculum     = filter_input(INPUT_POST, 'curriculum',  FILTER_SANITIZE_STRING);
    $curriculum->description    = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);  
    $curriculum->subject_id     = filter_input(INPUT_POST, 'subject_id',     FILTER_VALIDATE_INT);
    $curriculum->grade_id       = filter_input(INPUT_POST, 'grade_id',       FILTER_VALIDATE_INT);
    $curriculum->schooltype_id  = filter_input(INPUT_POST, 'schooltype_id',  FILTER_VALIDATE_INT);
    $curriculum->state_id       = filter_input(INPUT_POST, 'state_id',       FILTER_VALIDATE_INT);
    $curriculum->country_id     = filter_input(INPUT_POST, 'country_id',     FILTER_VALIDATE_INT);
    $curriculum->icon_id        = filter_input(INPUT_POST, 'icon_id',        FILTER_VALIDATE_INT);
    $curriculum->creator_id     = $USER->id;  
    switch ($_POST['func']) {
        case 'new':     if ($curriculum->add()){
                            $_SESSION['PAGE']->message[] = array('message' => 'Lehrplan hinzufgefügt', 'icon' => 'fa-th text-success');
                         }               
            break;
        case 'edit':     if ($curriculum->update()){
                            $_SESSION['PAGE']->message[] = array('message' => 'Lehrplan erfolgreich aktualisiert', 'icon' => 'fa-th text-success');
                         }
            break;
        case 'import':  if (isset($_POST['importFileName'])){
                            $file = $CFG->backup_root.'tmp/'. filter_input(INPUT_POST, 'importFileName', FILTER_UNSAFE_RAW);
                            if ($curriculum->import($file)){
                                $_SESSION['PAGE']->message[] = array('message' => 'Lehrplan erfolgreich importiert', 'icon' => 'fa-th text-success');
                            }
                        } 
            break;

        default:
            break;
    }

    $_SESSION['FORM']            = null;                     // reset Session Form object 
}

header('Location:'.$_SESSION['PAGE']->target_url);