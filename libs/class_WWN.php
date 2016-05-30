<?php

/*
 *   WWN = Work With Names(model)
 */

class WWN{
    private $_connect_1;
    private $_connect_2;

    public function __construct()
    {
        $this->_connect_1 = DataBaseConnect::getInstance();
        $this->_connect_2 = DataBaseConnect::getInstance2();
    }

    public function getNames()
    {
        $query = "SELECT `title` FROM `node` LIMIT 5";
        $stmt = $this->_connect_1->query($query);
        return $stmt;
    }

    public function getDescription()
    {
        $query = "SELECT `body_value`, `entity_id` FROM `field_data_body` LIMIT 1";
        $stmt = $this->_connect_1->query($query);
        return $stmt;
    }

    public function setDescription()
    {
        
    }
    






}