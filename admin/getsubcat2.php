<?php

require_once("../includes/connection.php");
require_once("../includes/functions.php");

$sub_category_1_id = $_GET['q'];

echo "<label class=\"control-label col-sm-2\" for=\"sub_category_2_id\">Sub category 2</label>
		<div class=\"col-sm-10\">";

echo "<select class=\"form-control\" name=\"sub_category_2_id\" onchange=\"showSubCat3(this.value)\">";


$query2 = "SELECT * FROM sub_category_2 WHERE sub_category_1_id={$sub_category_1_id}";
						$result2 = mysqli_query($connection,$query2);
						while($data = mysqli_fetch_assoc($result2)){
							$sub_category_2_id = $data['id'];
							$sub_category_2 = $data['sub_category_2'];
							$sub_topic_output = "<option value=\"{$sub_category_2_id}\">{$sub_category_2}</option>";
							echo $sub_topic_output;
						
						}
            
echo "</select></div>";     

?>