<form method="post" action="">
    <p><label for="del_symb">Случайное удаление символов</label></p>
    <p><textarea name="symb_del" rows="30" cols="70" id="del_symb"></textarea></p>
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
    ?>

</div>