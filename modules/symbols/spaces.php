<?php
if(isset($_POST['add_space'])){
    $return = new TextCorrect($_POST['add_space']);
    $_SESSION['result'] = $return->add_space();
    $result = $_SESSION['result'];
    unset($_SESSION['result']);
}