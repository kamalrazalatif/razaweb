<?php

// OOP: require_once("includes/initialize.php"); load up database connection classes and SQL classes
require_once("initialize.php");
require_once("display_functions.php");

                
$portal_id = !empty($_GET['p']) ? (int)$_GET['p'] : 10;
$topic_id = !empty($_GET['t']) ? (int)$_GET['t'] : 156;
$sub_topic_1_id = !empty($_GET['st1']) ? (int)$_GET['st1'] : 156;
$sub_topic_2_id = !empty($_GET['st2']) ? (int)$_GET['st2'] : 156;
$sub_topic_3_id = !empty($_GET['st3']) ? (int)$_GET['st3'] : 156;
$sub_topic_4_id = !empty($_GET['st1']) ? (int)$_GET['st4'] : 156;
$category_id = !empty($_GET['c']) ? (int)$_GET['c'] : 156;

$query = "SELECT * FROM keywords_portal WHERE portal_id={$portal_id} LIMIT 1";
$result = $db->query($query);
$data = $db->fetch_assoc($result);
$keywords = $data['keywords'];

$page_title = display_page_title($connection,$portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Keywords" content="<?php echo $keywords; ?>" />
        <title>
            <?php echo $page_title; ?>
        </title>
        <!-- favicon --><link rel="shortcut icon" href="favicon.ico"/>
        <!-- bootstrap css --><link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
        <!-- bootstrap theme css --><link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" >
        <!-- font awesome css --><link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" >
        <!-- custom_css --><link rel="stylesheet" type="text/css" href="css/custom.css" >
        <!-- jquery --><script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
        <!-- bootstrap js--><script src="js/respond.js"></script>
        <!-- bootstrap dropdown js --><script src="js/bootstrap.min.js"></script>
        <!-- modernizr javascript --><script src="js/modernizr-2.6.2.min.js"></script>

        <!-- jQuery Tabbed Panel -->
        <script type="text/javascript">
        $(document).ready(function(){ 
            $("#myTab li:eq(1) a").tab('show');
        });
        </script>

        <style type="text/css">
                .bs-example{
                        margin: 20px;
                }
        </style>

    </head>
    <body>
        <!-- global navigation bar -->
        <nav class="navbar navbar-inverse navport">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="assets/images/rw_logo1_exp.png"> RazaWeb</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php?p=1">Culture</a></li>
        <li><a href="index.php?p=2">Humanities</a></li>
        <li><a href="index.php?p=7">Technology</a></li>
        <li><a href="index.php?p=8">Science</a></li>
        <li><a href="index.php?p=3">Food</a></li>
        <li><a href="index.php?p=5">Health</a></li>
        <li><a href="index.php?p=4">Parenting</a></li>
        <li><a href="index.php?p=6">Careers</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="https://twitter.com/razaweb"><i class="fa fa-twitter fa-2x"></i></a></li>
        <li><a href="https://www.facebook.com/razaweb"><i class="fa fa-facebook-official fa-2x"></i></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>