<?php

require_once("includes/header.php");


?>

<div class="container main-container">
            <header class="row">
            <h1>Contact Us</h1>
        <!-- end row 1 --></header>
            <section class="section-box">

<?php
	
	// enter the email address of the email recipient (yours for testing purposes). Requires changing in order to work for you or your client.
	// For the script to work your host may require that this email address is a mailbox set-up and existing on the web server that is hosting the web site... Free Hosting Cloud do..
	
	$recipient = 'razakam79@gmail.com'; # <<<<<<<<<<< ---  UPDATE THIS EMAIL ADDRESS BEFORE UPLOADING.
	
	// the subject line of the email message that is sent to the recipient. // You can leave as it is or edit the wording.
	$subject ='Kamallatif.com - Contact Form Feedback'; 
	
	// Success message sent to user after email is sent. // // You can leave as it is or edit the wording.
	$success = "<h1>Thank you for filling out and submitting the form.</h1> <p>Someone will deal with your message and get back to you as soon as posible.</p> <p><a href='index.php'>Back</a> to the Home Page</p>";
	
	// failure message sent to user. // // You can leave as it is or edit the wording.
	$failure = "<h1>There was an error emailing the information</h1> <p>We could not send your form feedback information at this time.</p> <p>Please wait a few minutes and try again.</p> <p><a href='/'>Back</a> to the Home Page</p>";
	
	###########################################
//	       Do not edit below this line
	###########################################	
	// Collect all information from form and check all fields have been filled in.
 $email = $_POST['email'];
if (sizeof($_POST)) {
$message = "";
while(list($key, $val) = each($_POST)) {
if ($key == "Submit") {
//do nothing
}
else {
$message .= "$key:\n $val\r\n";
// Checks if $val contains data
if(empty($val)) {
echo ("<h1>Error in form entry</h1> <p>All form entry fields are required to be filled in and some have not been filled in.</p>
<p>Please go <a href='javascript: history.go(-1)'>Back</a> and try again</p>");
exit();
}
}
}}
// Validate email address
if(!preg_match("/^[a-z0-9]+([_\\.-][a-z0-9]+)*" ."@"."([a-z0-9]+([\.-][a-z0-9]+)*)+"."\\.[a-z]{2,}"."$/",$email)){
echo ("<h1>Error in form entry</h1> <p>An invalid email address was entered.</p> <p>Please go <a href='javascript: history.go(-1)'>Back</a> and try again>/p>");
exit();
}
###########	
    function filter_email_header($form_field) {
      return preg_replace('/[\0\n\r\|\!\/\<\>\^\$\%\*\&]+/','',$form_field);
    }

    $email  = filter_email_header($email);
    $headers = "From: $email\n";
	$sent = mail($recipient, $subject, $message, $headers);
    if ($sent) {
		
// the html below can be edited to change the thank you message the user receives
    ?>
    <h1>Success</h1>
    <p><?php echo $success;?></p>
    <?php

    } else {
// the message that is sent to the user if the form information was not sent.
    ?>
    <h1>Something went wrong</h1>
    <p><?php echo $failure;?></p>
    <?php
    }
    ?>
</section>

        <footer class="row">
            <ul class="list-inline">
                <li><a href="index.php">Home</a> | </li>
  		<li><a href="about.php">About Us</a> | </li>
                <li><a href="index.php?p=1">Culture</a> | </li>
                <li><a href="index.php?p=2">Humanities</a> | </li>
                <li><a href="index.php?p=3">Food</a> | </li>
                <li><a href="index.php?p=4">Parenting</a> | </li>
                <li><a href="index.php?p=5">Health</a> | </li>
                <li><a href="index.php?p=6">Careers</a> | </li>
                <li><a href="index.php?p=7">Technology</a> | </li>
                <li><a href="index.php?p=8">Science</a> | </li>
                <li><a href="contact.php">Contact</a></li>
          </ul>
            <p>&copy; Kamal Raza Latif 2015</p>
        </footer>
    <!-- end .container--></div>
</body>
</html>
<?php

  // 5. Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}

?>