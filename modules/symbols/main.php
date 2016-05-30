<?php



if(isset($_POST['symb_text'])){


    $return = new TextCorrect($_POST['symb_text']);
    $_SESSION['result'] = $return->rand_symb();
    $result = $_SESSION['result'];
    unset($_SESSION['result']);

}


