<?php


class names
{
    private $names;
    public $result;

    public function __construct()
    {
        $this->names = new WWN();
    }
    
    public function getNames()
    {
        
        $data = $this->names->getNames();
        $row = $data->fetchAll();
//        while($row = $data->fetch())
//        {
//            $this->result.=$row;
//        }
        return $row;
    }
    
    public function getDescription()
    {
        
        $data = $this->names->getDescription();
        $row = $data->fetchAll();
        
        return $row;
    }
}