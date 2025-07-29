<?php

class Message
{

    public static function showMessage(string $msg, string $state)
    {
        if ($state == "done") {
?>
<link rel="stylesheet" href="./main/firstStyles.css">
<style>
.message {
    font-size: 1.3em;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    padding: 20px;

    background-color: green;
}
</style>
<div class="message">
    <p><?= $msg ?></p>
</div>
<?php
        } else if ($state == "error") {
        ?>
<link rel="stylesheet" href="./main/firstStyles.css">
<style>
.message {
    font-size: 1.3em;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    padding: 20px;

    background-color: red;
}
</style>
<div class="message">
    <p><?= $msg ?></p>
</div>
<?php
            die();
        }
    }
}


?>
<!-- 
<style>
.message {
    display: flex;
    gap: 10px;
    align-items: start;
    justify-content: center;
}
</style> -->