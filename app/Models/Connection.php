<?php

$DB_USERNAME = "blackdracula";
$db = mysqli_connect("localhost",$DB_USERNAME,"test");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>