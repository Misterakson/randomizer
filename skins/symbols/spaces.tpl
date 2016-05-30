<form method="post" action="">
    <p><label for="add_space">Добавление/удаление пробелов</label></p>
    <p><textarea name="add_space" rows="30" cols="70" id="add_space"></textarea></p>
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