<?php

$names = new names();
$listOfNames = $names->getNames();
$listOfDescription = $names->getDescription();

?>



<div class="row">
    <div class="col-md-5">
        <?php
        foreach ($listOfNames as $currentName)
        {
            echo $currentName['title']."<br>";
        }
        echo "<hr>";

        foreach ($listOfDescription as $curDesc)
        {
            echo $curDesc['body_value'];
        }

        ?>
    </div>
</div>