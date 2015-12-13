<?php

$dbc=mysqli_connect('127.0.0.1','root','','test')
      or die("error connecting to the database");
$query = 'SELECT * FROM comments WHERE articleid="'.$_POST['articleid'].'"';

		// Do Search
		$result = mysqli_query($dbc,$query)or die('no query');
$message='';
while($row = mysqli_fetch_array($result)){    
        
   	 	$message.='<div class="molly"><h3>'.$row["content"].'</h3></div>';
		
}
echo $message;

?>