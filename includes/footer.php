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