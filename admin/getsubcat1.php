<?php

require_once("../includes/connection.php");
require_once("../includes/functions.php");

$category_id = $_GET['q'];

echo "<label class=\"control-label col-sm-2\" for=\"sub_category_1_id\">Sub category 1</label>
		<div class=\"col-sm-10\">";

echo "<select class=\"form-control\" name=\"sub_category_1_id\" onchange=\"showSubCat2(this.value)\">";


$query2 = "SELECT * FROM sub_category_1 WHERE category_id={$category_id}";
						$result2 = mysqli_query($connection,$query2);
						while($data = mysqli_fetch_assoc($result2)){
							$sub_category_1_id = $data['id'];
							$sub_category_1 = $data['sub_category_1'];
							$sub_topic_output = "<option value=\"{$sub_category_1_id}\">{$sub_category_1}</option>";
							echo $sub_topic_output;
						
						}
            
echo "</select></div>";     

?>