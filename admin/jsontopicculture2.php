<?php
require_once("../includes/connection.php");
require_once("../includes/functions.php");




$query = "SELECT * FROM topics WHERE portal_id=1";
						$result = mysqli_query($connection,$query);
						while($data = mysqli_fetch_assoc($result)){
						    
						    $output = "{\"text\":\"{$data['topic']}\",\"value\":\"{$data['id']}\"}";
							echo $output;
						
						}

?>
