<?php


require_once("initialize.php");

$portal_id = 7;
$portal = Portal::find_by_id($portal_id);
$bc_portal_title = $portal->portal;

echo "<h1>$bc_portal_title</h1>";

$portal_id = 2;
$portal = Portal::find_by_id($portal_id);
$bc_portal_title = $portal->portal;

echo "<h1>$bc_portal_title</h1>";

$topic_id = 2;
$topic = Topic::find_by_id($topic_id);
$bc_topic_title = $topic->topic;

echo "<h1>$bc_topic_title</h1>";

// function generate_meta_keywords test
$portal_id = 9;
$keywords_portal = KeywordsPortal::find_by_id($portal_id);
$keywords = $keywords_portal->keywords;

echo "<p>{$keywords}</p>";

//portal navigaiton test
$portal_id = 8;
$category_id = 1;
$query = "SELECT * FROM category,portal_category_relationship WHERE portal_id={$portal_id} AND portal_category_relationship.category_id=category.id";
global $db;
$result = $db->query($query);
while($portal_category_data = $db->fetch_assoc($result)){
    $link_category_id = $portal_category_data['id'];
    $category_title = $portal_category_data['category_title'];
    
    if($link_category_id == $category_id){
        $active_link = " class = \"active\" ";
    } else {
        $active_link = null;
    }
    
    $output = "<li{$active_link}><a href=\"index.php?p={$portal_id}&amp;c={$link_category_id}\">{$category_title}</a></li>";
    echo $output;
} // end while



?>