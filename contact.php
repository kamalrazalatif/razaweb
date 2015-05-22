<?php

require_once("includes/header.php");


?>



<div class="container main-container">
            <header class="row">
            <h1>Contact Us</h1>
        <!-- end row 1 --></header>
            <section class="section-box">
                <form id="form1" name="form1" method="post" action="contactmail.php">
    <p>Please feel free to contact me via email by completing the following form:</p>
    <p>&nbsp;</p>
    <p>
      <label for="name">Please enter your name</label>
      <input name="name" type="text" class="highlighted" id="name" maxlength="40"/>
    </p>
    <p>
      <label for="email">Please enter your email address</label>
      <input name="email" type="text" class="highlighted" id="email" maxlength="40"/>
    </p>
    <p>
      <label for="message">Please type your message in the space provided</label>
      </p>
    <p>
      <textarea name="message" id="message" cols="45" rows="5"></textarea>
    </p>
    <p>
      <input type="submit" name="submit" id="submit" value="Submit" />
      <label for="clear"></label>
      <input type="reset" name="clear" id="clear" value="Clear form" />
    </p>
  </form>
                
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