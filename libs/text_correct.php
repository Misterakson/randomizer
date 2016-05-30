<?php

function rand_symb($text){

    $symbols = array(
        ', ','. ',': ','; ','! ','* ','- ','? '
    );
    $rand = 3;
    for($i = 0; $i<iconv_strlen($text); $i++){

        if($text[$i] == ' '){
                if($rand > rand(0,99)){
                    $text[$i] = $symbols[rand(0,7)];
                }
        }
    }

    return $text;


}


function text_mistakes($text){

//    $rand = 100;
    $pattern        = '/*ться/';
    $replacement    = '/*тся/';
//    $matches = array();
    for($i = 0; $i<count($text); $i++)
    {


        if(preg_match_all($pattern,$text,$matches)){
            preg_replace($pattern, $replacement, $text);
        }




    }
    return $text;
}
function my_split($text){
    $pattern = '/(?<=[...|!|?|.|;]\s)\s+/';
    $p_return = preg_split($pattern, $text);
//    for($i = 0; $i < count($p_return); $i++){
//        $p_return[$i] .= "<br><br>";
//    }
    return $p_return;

}



