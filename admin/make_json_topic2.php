<?php
require_once("../includes/connection.php");
require_once("../includes/functions.php");


$sql = "SELECT * FROM topics WHERE portal_id=1";
						

$response = array();
$posts = array();
$result = mysqli_query($connection,$sql);
while($data = mysqli_fetch_assoc($result))
{ 
$text=$data['topic']; 
$value=$data['id']; 

$posts[] = array('text'=> $text, 'value'=> $value);

} 

$response['posts'] = $posts;

$fp = fopen('option2.json', 'w');
fwrite($fp, json_encode($posts));
fclose($fp);						
						

?>
