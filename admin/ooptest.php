<?php

require_once("includes/initialize.php");

$sql = "SELECT * FROM links";

$result = $db->query($sql);
while($data = $db->fetch_assoc($result)){
    $link_text = $data['link_text'];
    echo "<li>{$link_text}</li>";
}


?>