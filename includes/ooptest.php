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


?>