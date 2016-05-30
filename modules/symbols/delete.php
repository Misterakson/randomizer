<?php
if(isset($_POST['symb_del'])){
    $return = new TextCorrect($_POST['symb_del']);
    $_SESSION['result'] = $return->del_symb();
    $result = $_SESSION['result'];
    unset($_SESSION['result']);
}