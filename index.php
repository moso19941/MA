<?php


require 'user.php';

$user = new User('Sulaiman');

$user->Display_userName();

echo "<br>";

$user->Display_Accounts();
?>