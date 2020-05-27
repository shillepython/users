<?php
require_once "autoload.php";
$user1 = new User("Serafim", "123");
echo $user1->isValid("Serafi", "123");