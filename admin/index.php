<?php

// require initialize file with links to db class, session class, config settign etc
require_once("includes/initialize.php");
// login check - conditonal if not logged in (via session) redirect to login.php
if (!$session->is_logged_in()) { redirect_to("login.php"); } 

require_once("admin_header.php");


?>
<div class="container">
    
    <header>
        <h1>Admin Home Page</h1>
    </header>
    <section class="admin-section">
        <h2>Admin Links - Database Management</h2>
            <ul>
                <li><a href="new_link.php">Add a New Link to the Database - New Link.php link</a></li>
                <li><a href="new_topic.php">Add a New Topic - New Topic.php link</a></li>
                <li><a href="new_provider.php">New Content provider.php link</a></li>
                <li><a href="new_post.php">New Blog Post</a></li>
            </ul>
    </section>
    <footer>
        <?php require_once("admin_footer.php"); ?>
    </footer>           
<!-- end .container --></div>

</body>
</html>