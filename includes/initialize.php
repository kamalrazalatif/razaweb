<?php

//require_once("connection.php");
require_once("functions.php");

// Library Path - to all Include Files
defined('LIB_PATH') ? null: define('LIB_PATH',SITE_ROOT.DS.'includes');

//set up database classes in model
require_once("database.php");
require_once("database_object.php");


require_once("portal.php");
require_once("topic.php");
require_once("subtopic1.php");
require_once("subtopic2.php");
require_once("subtopic3.php");
require_once("subtopic4.php");
require_once("category.php");
require_once("link.php");
require_once("blogpost.php");
require_once("keywordsportal.php");
require_once("keywordstopic.php");
require_once("keywordscategory.php");
require_once("keywordssubtopic1.php");
require_once("keywordssubtopic2.php");
require_once("keywordssubtopic3.php");
require_once("keywordssubtopic4.php");

?>