<?php

// OOP: require_once("includes/initialize.php"); load up database connection classes and SQL classes
// require_once("initialize.php");

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
        <!-- favicon --><link rel="shortcut icon" href="../favicon.ico"/>
        <!-- bootstrap css --><link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" >
        <!-- bootstrap theme css --><link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css" >
        <!-- font awesome css --><link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" >
        <!-- custom_css --><link rel="stylesheet" type="text/css" href="../css/custom.css" >
        <!-- jquery --><script src="../js/jquery-1.10.2.min.js" type="text/javascript"></script>
        <!-- bootstrap js--><script src="../js/respond.js"></script>
        <!-- bootstrap dropdown js --><script src="../js/bootstrap.min.js"></script>
        <!-- modernizr javascript --><script src="../js/modernizr-2.6.2.min.js"></script>
        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
        <!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->
        <!-- jquery UI --><script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css">
  
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
  dateFormat: "yy-mm-dd"
});
  });
  </script>

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
      <a class="navbar-brand" href="../index.php"><img src="../assets/images/rw_logo1_exp.png"> RazaWeb</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Admin Home</a></li>
        <li><a href="new_link.php">Add New Link</a></li>
        <li><a href="new_topic.php">New Topic</a></li>
        <li><a href="new_provider.php">New Content Provider</a></li>
        <li><a href="new_post.php">New Blog Post</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <?php
        
        if(isset($_SESSION['user_id'])){
			
		$user = User::find_by_id($_SESSION['user_id']);	
			
                $headerpic = $user->user_pic;
		$profileid = $_SESSION['user_id'];
		$firstname = $user->first_name;
		$lastname = $user->last_name;
		
        $headerright = "<li><a href=\"profile.php?id={$profileid}\"><img class=\"hdprofpic\"";
        $headerright .= "src=\"../assets/images/uploads/profpic/{$headerpic}\""; 
        $headerright .=	" alt=\"{$firstname}". " " ."{$lastname}" . " profile pic\" width=\"50\" /></a></li>";
        $headerright .= "<li><a href=\"profile.php?id={$profileid}\">{$firstname}". " " ."{$lastname}</a></li>";
        $headerright .= "<li><a href=\"logout.php\">Logout</a></li>";
        
        echo $headerright;
        }
        ?>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>