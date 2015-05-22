<?php
require_once("../includes/connection.php");
require_once("../includes/functions.php");

$query = "SELECT * FROM portals";
					$result = mysqli_query($connection,$query);
					while($data = mysqli_fetch_assoc($result)){
                                            echo json_encode($data);

					}



?>