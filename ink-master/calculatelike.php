<?php
$user=$_SESSION['user'];
$article=$_POST['article'];
$dbc=mysqli_connect('127.0.0.1','root','','test')
      or die("error connecting to the database");
  $query="select * from liketable where creatorid={$user} and articleid={$article}";
  $result=mysqli_query($dbc,$query);
  $row=mysqli_fetch_array($result);
  $count=mysqli_num_rows($result);
  if($count==0)
  {
  	$query="insert into liketable(creatorid,articleid) values({$user},{$article})";
  	$result=mysqli_query($dbc,$query);
  }
 ?>
