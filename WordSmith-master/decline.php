<?php

$dbc=mysqli_connect('127.0.0.1','root','','test')
      or die("error connecting to the database");
$query="update hiredeal set status=\"decline\" where dealid={$_GET['dealid']}";
    $result=mysqli_query($dbc,$query);

header("location:portal.php");

?>