<?php
$user=$_POST['user'];
$view=$_POST['view'];
if($user!=$view)
{
$dbc=mysqli_connect('127.0.0.1','root','','test')
      or die("error connecting to the database");
  $query="select * from follower where creator1={$user} and creator2={$view}";
  $result=mysqli_query($dbc,$query);
  $row=mysqli_fetch_array($result);
  $count=mysqli_num_rows($result);
  if($count==0)
  {
  	$query="insert into follower(creator1,creator2) values({$user},{$view})";
  	$result=mysqli_query($dbc,$query);
    return "true";

  }
  else
    return "false";

 }
 ?>
