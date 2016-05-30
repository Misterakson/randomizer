<?php

if(isset($_POST['sent'],$_POST['text'])){

//mysqli_query($link,"
//INSERT INTO `texts` SET
//`text` = '".$_POST['text']."'

//");
    $_SESSION['result'] = '';
    $output = array();
    $spl_text = my_split($_POST['text']);
    for($i = 0; $i < count($spl_text); $i++) {
        $return = new TextCorrect($spl_text[$i]);
//        $output = '';
//        $_SESSION['result'] = '';

        if (isset($_POST['sym_del'])) {
            $output[$i] = $return->del_symb($_POST['s_d_pro']);
        }

        if (isset($_POST['sym_mist'])) {
            $output[$i] = $return->tsa_mist($_POST['s_m_pro']);
        }


        if (isset($_POST['img_inp'])){
            $output[$i] = $return->add_img($_POST['folder_name'],$_POST['']);
        }

        if (isset($_POST['sp_del'])) {
            $output[$i] = $return->del_space($_POST['sp_d_pro']);
        }

        if (isset($_POST['sym_rep'])) {
            $output[$i] = $return->for_replace($_POST['s_r_pro']);
        }

        if (isset($_POST['sym_add'])) {
            $output[$i] = $return->rand_symb($_POST['s_a_pro']);
        }

        if(isset($_POST['scr_inp'])){
            $output[$i] = $return->add_js($_POST['js_i_pro']);
        }
        if(isset($_POST['html_inp'])){
            $output[$i] = $return->add_html($_POST['html_t_pro']);
        }
        
        if(isset($_POST['no_inp'])){
            $output[$i] = $return->no_index($_POST['no_pro']);
        }

        if(isset($_POST['no_inp'])){
            $output[$i] = $return->no_index($_POST['no_t_pro']);
        }
        if(isset($_POST['img_inp'])){
            $output[$i] = $return->add_img($_POST['folder_name'],$_POST['img_pro']);
        }

        if (isset($_POST['add_hr'])) {
            $output[$i] = $return->add_hr();
        }

        if(!isset($_POST['add_hr'])){
            $output[$i] = $return->add_br();
        }
        $output[$i] = $return->echo_html();



        if(isset($_POST['out_rand'])){
//            iconv('utf-8','cp1251',$_SESSION['result'][$i]);
            $_SESSION['result'][$i] .= $output[$i] ;

//            iconv('cp1251','utf-8',$_SESSION['result'][$i]);
        }
        else{
            $_SESSION['result'] .= $output[$i];

        }
    }
//    if(isset($_POST['html_tags'])){
//        $_SESSION['result'] = $return->html_tags($_POST['h_t_pro']);
//    }
    $result = ' ';
    if(isset($_POST['out_rand'])){

//            iconv('utf-8','windows-1251',$_SESSION['result'][$i]);
            shuffle($_SESSION['result']);
            for($i = 0; $i < count($_SESSION['result']); $i++){
                $result.= $_SESSION['result'][$i];
            }



//            iconv('windows-1251','utf-8',$_SESSION['result'][$i]);


    }
    else{
        $result = $_SESSION['result'];
    }

    

    unset($_SESSION['result']);
//    print_r($_SESSION['result']);
}






