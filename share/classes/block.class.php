<?php
/**
* 
* @abstract This file is part of curriculum - http://www.joachimdieterich.de
* @package core
* @filename block.class.php
* @copyright 2016 Joachim Dieterich
* @author Joachim Dieterich
* @date 2016.06.12 21:01
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
class Block {
    
    public $id;
    public $block;
    public $visible;
    public $block_id;
    public $name;
    public $context_id;
    public $region;
    public $weight;
    public $configdata;
    public $institution_id;
    public $role_id;
    
    
    public function __construct() {
        
    }
    
    /**
     * Add Block
     * @return boolean 
     */
    public function add(){
        global $USER;
        checkCapabilities('block:add', $USER->role_id);
        $db = DB::prepare('INSERT INTO block_instances (block_id,name,context_id,region,weight,configdata,institution_id,role_id) VALUES (?,?,?,?,?,?,?,?)');
        return $db->execute(array($this->block_id, $this->name, $this->context_id, $this->region, $this->weight,$this->configdata,$this->institution_id,$this->role_id));
    }
    
    /**
     * Update current Block
     * @return boolean 
     */
    public function update(){
        global $USER;
        checkCapabilities('block:update', $USER->role_id);
        $db = DB::prepare('UPDATE block_instances  SET name = ?, configdata = ? WHERE id = ?');
        return $db->execute(array($this->name, $this->configdata, $this->id));
    }
    
    public function load(){
        $db = DB::prepare('SELECT bi.*, bl.block, bl.visible FROM block_instances AS bi, block AS bl WHERE bi.block_id = bl.id AND bi.id = ?'); //0 == all institutions
        $db->execute(array($this->id));
        while($result = $db->fetchObject()) { 
            $this->id              = $result->id;
            $this->block           = $result->block; 
            $this->visible         = $result->visible; 
            $this->block_id        = $result->block_id;
            $this->name            = $result->name;
            $this->context_id      = $result->context_id; 
            $this->region          = $result->region; 
            $this->weight          = $result->weight; 
            $this->configdata      = $result->configdata; 
            $this->institution_id  = $result->institution_id;
            $this->role_id         = $result->role_id;
            $this->status          = 'collapsed-box'; //todo: load status based on userconfig
        }
    }
    
    public function get(){
        $db = DB::prepare('SELECT bi.*, bl.block, bl.visible FROM block_instances AS bi, block AS bl 
                                        WHERE bi.block_id = bl.id
                                        AND context_id = ? AND (institution_id = ? OR institution_id = 0) ORDER BY bi.weight'); //0 == all institutions
        $db->execute(array($this->context_id, $this->institution_id));
        $blocks = array();
        while($result = $db->fetchObject()) { 
            $this->id              = $result->id;
            $this->block           = $result->block; 
            $this->visible         = $result->visible; 
            $this->block_id        = $result->block_id;
            $this->name            = $result->name;
            $this->context_id      = $result->context_id; 
            $this->region          = $result->region; 
            $this->weight          = $result->weight; 
            $this->configdata      = $result->configdata; 
            $this->institution_id  = $result->institution_id;
            $this->role_id         = $result->role_id;
            $this->status          = 'collapsed-box'; //todo: load status based on userconfig
            $blocks[]              = clone $this;
        }
        return $blocks;
    }
    
    public function types(){
        $db         = DB::prepare('SELECT bl.* FROM  block AS bl'); 
        $db->execute(array());
        $types      = new stdClass();
        $type_list  = array();
                
        while($result = $db->fetchObject()) {
            foreach ($result as $key => $value) {
                $types->$key = $value;
            }
            $type_list[] = clone $types;
        }
        return $type_list;
    }
    
}