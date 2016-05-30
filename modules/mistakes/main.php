<?php

if(isset($_POST['mist_text'])){


    $return = new Mistakes($_POST['mist_text']);
    $_SESSION['result'] = $return -> tsa_mist();
    $result = $_SESSION['result'];
    unset($_SESSION['result']);

}
