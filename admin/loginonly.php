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