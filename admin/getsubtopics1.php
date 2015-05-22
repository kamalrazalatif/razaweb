<?php

require_once("../includes/connection.php");
require_once("../includes/functions.php");

$topic_id = $_GET['q'];

echo "<label class=\"control-label col-sm-2\" for=\"sub_topic_1_id\">Sub Topic 1</label>
		<div class=\"col-sm-10\">";

echo "<select class=\"form-control\" name=\"sub_topic_1_id\" onchange=\"showSubTopics2(this.value)\">";
echo "<option value=\"\">Please select an Option</option>";


$query2 = "SELECT * FROM sub_topic_1 WHERE topic_id={$topic_id}";
						$result2 = mysqli_query($connection,$query2);
						while($data = mysqli_fetch_assoc($result2)){
							$sub_topic_1_id = $data['id'];
							$sub_topic_1 = $data['sub_topic_1'];
							$sub_topic_output = "<option value=\"{$sub_topic_1_id}\">{$sub_topic_1}</option>";
							echo $sub_topic_output;
						
						}
            
echo "</select></div>";     

?>