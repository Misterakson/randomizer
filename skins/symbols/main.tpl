<form method="post" action="">
    <p><label for="text_symb">Добавление случайных символов</label></p>
    <p><textarea name="symb_text" rows="30" cols="70" id="text_symb"></textarea></p>
    <p><input type="submit" value="Send"></p>
</form>

<div style="background-color: grey;">
    <?php
    if(isset($result)){
        echo $result;
    }
    else{
        echo "Work";
    }

//    $phrase  = "You should eat fruits, vegetables, and fiber every day.";
//    $healthy = array("fruits", "vegetables", "fiber");
//    $yummy   = array("pizza", "beer", "ice cream");
//
//    echo $newphrase = str_replace($healthy, $yummy, $phrase);
    ?>

</div>