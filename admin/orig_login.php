<?php
require_once("includes/initialize.php");

if($session->is_logged_in()) {
  redirect_to("index.php");
}

// Remember to give your form's submit tag a name="submit" attribute!
if (isset($_POST['submit'])) { // Form has been submitted.

		$errors = array();
        
        // perform validations on the form data
        $required_fields = array('username', 'password');
        $errors = array_merge($errors, check_required_fields($required_fields, $_POST));
        
        $fields_with_lengths = array('username' => 30, 'password' => 30);
        $errors = array_merge($errors, check_max_field_lengths($fields_with_lengths, $_POST));
		
		if ( empty($errors) ) {

  			$username = trim($_POST['username']);
  			$password = trim($_POST['password']);
			
  
  			// Check database to see if username/password exist.
			$found_user = User::authenticate($username, $password);
	
  			if ($found_user) {
			    $session->login($found_user);
			    log_action('Login', "{$found_user->username} logged in.");
			    redirect_to("index.php");
  			} else {
    			// username/password combo was not found in the database
    			$message = "Username/password combination incorrect.";
  			}
		} else {
            if (count($errors) == 1) {
                $message = "There was 1 error in the form.";
            } else {
                $message = "There were " . count($errors) . " errors in the form.";
            }
		}
  
} else { // Form has not been submitted.
  $username = "";
  $password = "";
}

?>
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>RazaWeb Admin Login Page</title>
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
  </head>
  <body>
    
<div class="container">

<section>
		<h2>RazaWeb Admin Login</h2>
		<?php echo output_message($message); ?>
        <?php if (!empty($errors)) { display_errors($errors); } ?>

	      <form role="form" class="form-horizontal" action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="post">
		  
		  <div class="form-group">
                	<label class="control-label col-sm-2" for="username">Username</label>
			<div class="col-sm-10">
			    <input class="form-control" type="text" name="username" placeholder="Enter Username Here">
			</div>
		<!-- end .form-group --></div>
		  <div class="form-group">
                	<label class="control-label col-sm-2" for="password">Password</label>
			<div class="col-sm-10">
			    <input class="form-control" type="password" name="password" placeholder="Enter Password Here">
			</div>
		<!-- end .form-group --></div>
		  
		<div class="form-group">        
		    <div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default" name="submit">Login</button>
		    </div>
		</div>
	      </form>
        <p>Not a user and want to join RazaWeb? <a href="new_user.php">Click Here To Sign Up</a></p>
	</section>

<footer>&copy; Kamal Raza Latif 2015</footer>
<!-- end .container --></div>
  </body>
  </html>
  
