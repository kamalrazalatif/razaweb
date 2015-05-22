<?php

require_once("../includes/connection.php");
require_once("../includes/functions.php");

$portal_id = $_GET['q'];

echo "<label class=\"control-label col-sm-2\" for=\"topic_id\">Topic</label>
		<div class=\"col-sm-10\">";

echo "<select class=\"form-control\" name=\"topic_id\" onchange=\"showSubTopics1(this.value)\">";
echo "<option value=\"\">Please select an Option</option>";

$query2 = "SELECT * FROM topics WHERE portal_id={$portal_id}";

            $result2 = mysqli_query($connection,$query2);
            while($data2 = mysqli_fetch_assoc($result2)){
                    $topic_id = $data2['id'];
                    $topic = $data2['topic'];
                    $topic_output = "<option value=\"{$topic_id}\">{$topic}</option>";
                    echo $topic_output;
            
            }
            
echo "</select></div>";            

?>