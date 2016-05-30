<div>
    <form method="post" action="" >
        <p><label for="text_mistakes">Добавление ошибок</label></p>
        <p><textarea name="mist_text" rows="30" cols="70" id="text_mistakes"></textarea></p>
        <p><input type="submit" value="Send"></p>
    </form>
</div>

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