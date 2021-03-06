<?php
/** This file is part of curriculum - http://www.joachimdieterich.de
* 
* @package core
* @filename p_config.php
* @copyright 2016 Joachim Dieterich
* @author Joachim Dieterich
* @date 2016.06.10 11:32
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
include(dirname(__FILE__).'/../setup.php');  // Klassen, DB Zugriff und Funktionen
include(dirname(__FILE__).'/../login-check.php');  //check login status and reset idletimer
global $USER,$CFG;
$USER   = $_SESSION['USER'];
$func   = filter_input(INPUT_GET, 'func',           FILTER_SANITIZE_STRING);
$object = file_get_contents("php://input");

switch ($func) {
    case "user_paginator":  $u      = new User();        
                            $val    = filter_input(INPUT_GET, 'val',           FILTER_SANITIZE_STRING); // kein INT --> System ID -1
                            $u->update('value', 'paginator_limit', $val);
                            $_SESSION['USER']->paginator_limit = $val;
        break;
    case "institution_id":  $u      = new User();
                            $val    = filter_input(INPUT_GET, 'val', FILTER_VALIDATE_INT);
                            $u->id  = $USER->id;
                            if ($u->checkInstitutionEnrolment($val)){
                                $_SESSION['USER']->institution_id = $val;
                                $u->getRole($val);
                                $_SESSION['USER']->role_id = $u->role_id;
                                $USER =& $_SESSION['USER'];
                                $u->load('id',$u->id,false);
                                assign_to_template($u,'my_');   
                            }
        break;
    case "paginator_col":   $paginator    = new SmartyPaginate();
                            $paginator_id = filter_input(INPUT_GET, 'val', FILTER_SANITIZE_STRING);
                            $column       = filter_input(INPUT_GET, 'column', FILTER_SANITIZE_STRING);
                            $paginator->setColumnVisibility($column, $paginator_id, !boolval($paginator->getColumnVisibility($column, $paginator_id)));      //invert column visibility                     
        break;
                        
    case "paginator_order": SmartyPaginate::setSort(filter_input(INPUT_GET, 'order', FILTER_SANITIZE_STRING),filter_input(INPUT_GET, 'sort', FILTER_SANITIZE_STRING), filter_input(INPUT_GET, 'paginator', FILTER_SANITIZE_STRING));
        break;
    case "paginator_checkrow": echo json_encode(SmartyPaginate::setSelection(filter_input(INPUT_GET, 'val', FILTER_SANITIZE_STRING), filter_input(INPUT_GET, 'paginator', FILTER_SANITIZE_STRING)));
        break;
                            
    default: break;
}
