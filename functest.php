<?php

require_once("includes/connection.php");
require_once("includes/display_functions.php");

$portal_id = !empty($_GET['p']) ? (int)$_GET['p'] : 156;
$topic_id = !empty($_GET['t']) ? (int)$_GET['t'] : 156;
$sub_topic_1_id = !empty($_GET['st1']) ? (int)$_GET['st1'] : 156;
$sub_topic_2_id = !empty($_GET['st2']) ? (int)$_GET['st2'] : 156;
$sub_topic_3_id = !empty($_GET['st3']) ? (int)$_GET['st3'] : 156;
$sub_topic_4_id = !empty($_GET['st4']) ? (int)$_GET['st4'] : 156;
$category_id = !empty($_GET['c']) ? (int)$_GET['c'] : 156;

$box_title = display_content_box_header($connection,$portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
echo $box_title;

welcome_box($connection);

?>