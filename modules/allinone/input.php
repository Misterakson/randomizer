<?php


class input{

    private $namesFrom;
    private $namesWhere;
    private $textCorr;
    private $output;
    private $rand = 1;

    
    
    public function __construct()
    {
        $this->namesFrom = new WWN();
        $this->namesWhere = new WWN();
    }

    public function createNewText()
    {

        $data = $this->namesFrom->getDescription();
        $row = $data->fetchAll();


        
        foreach ($row as $text)
        {


            $this->textCorr = new textUpdate($text['body_value'],30);
            $this->textCorr->del_symb();
//            print_r($text['body_value']);
//            die();
//            $this->output = $this->textCorr->add_js($this->rand);
//            $this->output = $this->textCorr->no_index($this->rand);
//            $this->output = $this->textCorr->add_hr();
//            $text->output.= $this->textCorr->del_space(50);
            

        }
//        print_r($this->output);
//        die();
        return $this->output;
        
    }





}