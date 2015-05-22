<?php

// OOP: require_once("includes/initialize.php"); load up database connection classes and SQL classes
require_once("initialize.php");

                $title = "home";
                
                if($title = "home"){
                    $display_title = "Razaweb Home Page";
                } else {
                    $display_title = "Razaweb" . $title . "Home Page";
                }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <title>
            <?php echo $display_title; ?>
        </title>
        <!-- bootstrap css --><link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
        <!-- bootstrap theme css --><link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" >
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
        <nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">RazaWeb</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="index.php?p=1" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Culture <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="index.php?p=1&amp;t=1">Art</a></li>
            <li><a href="#">Architecture</a></li>
            <li><a href="#">TV</a></li>
            <li><a href="#">Film</a></li>
            <li><a href="#">Literature</a></li>
          </ul>
        </li>
                <li class="dropdown">
          <a href="index.php?p=2" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Humanities <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Art</a></li>
            <li><a href="#">Architecture</a></li>
            <li><a href="#">TV</a></li>
            <li><a href="#">Film</a></li>
            <li><a href="#">Literature</a></li>
          </ul>
        </li>
                        <li class="dropdown">
          <a href="index.php?p=3" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Food <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Art</a></li>
            <li><a href="#">Architecture</a></li>
            <li><a href="#">TV</a></li>
            <li><a href="#">Film</a></li>
            <li><a href="#">Literature</a></li>
          </ul>
        </li>
                                <li class="dropdown">
          <a href="index.php?p=4" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Parenting <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Art</a></li>
            <li><a href="#">Architecture</a></li>
            <li><a href="#">TV</a></li>
            <li><a href="#">Film</a></li>
            <li><a href="#">Literature</a></li>
          </ul>
        </li>
                                        <li class="dropdown">
          <a href="index.php?p=5" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Health <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Art</a></li>
            <li><a href="#">Architecture</a></li>
            <li><a href="#">TV</a></li>
            <li><a href="#">Film</a></li>
            <li><a href="#">Literature</a></li>
          </ul>
        </li>
                                                <li class="dropdown">
          <a href="index.php?p=6" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Technology <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Art</a></li>
            <li><a href="#">Architecture</a></li>
            <li><a href="#">TV</a></li>
            <li><a href="#">Film</a></li>
            <li><a href="#">Literature</a></li>
          </ul>
        </li>
        
        <li><a href="index.php?p=7">Science</a></li>
        <li><a href="index.php?p=8">Careers</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Facebook</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>