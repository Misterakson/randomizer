<?php
if(isset($_POST['symb_rep'])){
    $return = new Mistakes($_POST['symb_rep']);
    $_SESSION['result'] = $return->for_replace();
    $result = $_SESSION['result'];
    unset($_SESSION['result']);
}