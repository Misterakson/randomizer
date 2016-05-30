<form method="post" action="">
    <p><label for="rep_symb">Замена русских символов английскими</label></p>
    <p><textarea name="symb_rep" rows="30" cols="70" id="rep_symb"></textarea></p>
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