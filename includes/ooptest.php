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




?>