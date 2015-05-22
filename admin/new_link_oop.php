<?php

// require initialize file with links to db class, session class, config settign etc
require_once("includes/initialize.php");
// login check - conditonal if not logged in (via session) redirect to login.php
if (!$session->is_logged_in()) { redirect_to("login.php"); } 

require_once("admin_header.php");

if(isset($_POST['submit'])){


    $link = new Link();    

//Set up variables and SQL Query

//$desc = mysqli_real_escape_string($connection, $_POST['desc']);
//$link = mysqli_real_escape_string($connection, $_POST['link']);

$link->user_id = $_SESSION['user_id'];
$link->portal_id = $_POST['portal_id'];
$link->topic_id = $_POST['topic_id'];
$link->sub_topic_1_id = !empty($_POST['sub_topic_1_id']) ? $_POST['sub_topic_1_id'] : 0;
$link->sub_topic_2_id = !empty($_POST['sub_topic_2_id']) ? $_POST['sub_topic_2_id'] : 0;
$link->sub_topic_3_id = !empty($_POST['sub_topic_3_id']) ? $_POST['sub_topic_3_id'] : 0;
$link->sub_topic_4_id = !empty($_POST['sub_topic_4_id']) ? $_POST['sub_topic_4_id'] : 0;
$link->category_id = $_POST['category_id'];
$link->sub_category_1_id = !empty($_POST['sub_category_1_id']) ? $_POST['sub_category_1_id'] : 0;
$link->content_source_id = $_POST['content_source_id'];
$link->rank = 0;
$link->toplinks = 0;
$link->quicklink = !empty($_POST['quicklink']) ? $_POST['quicklink'] : 0;
$link->link_text = $_POST['link_text'];
$link->link_href = $_POST['link_href'];
$link->link_desc = $_POST['link_desc'];
$link->link_date = $_POST['link_date'];
$link->upload_date = strftime("%Y-%m-%d %H:%M:%S",time());

	$linkpic = new LinkPic();
	$linkpic->attach_file($_FILES['link_pic']);
	$link->link_pic = $linkpic->save();
	
	if($link->create()){
            //echo "Link was created";
			$session->message("You successfully inserted a new link into the database!");
			$session->login($user);
			log_action('New Link Added To Database by ', "{$user->username}.");
				
            	
        } else {
            echo "Link was not created";
        }

		
		
	// open and update logfile.txt with user action
	$action = "New Link Added to RazaWeb Database";
	$log_message = "By User Kamal Latif";
	log_action($action,$log_message);

} // end submit

$message = "No Message";



?> 
    <div class="container">
    <header>
	  <h1>RazaWeb Admin New Link Page</h1>
    </header>
    <section class="admin-section">
	

    <h3>New Link Insertion Form</h3>
    <p><?php echo $message; ?></p>
		
		<form name="form1" role="form" class="db-update-form form-horizontal" method="post" action="<?php  echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                <fieldset>
		    <legend>Link Information From Source</legend>
		    
		    <div class="form-group">
		    <label class="control-label col-sm-2" for="content_source_id">Content Provider/ Source - Dynamic</label>
		    <div class="col-sm-10">
                    <select class="form-control" name="content_source_id">
                    
					<?php
					
					
					
					
						$query = "SELECT * FROM content_source";
						$result = $db->query($query);
						while($data = $db->fetch_assoc($result)){
							$content_source_id = $data['id'];
							$content_source = $data['content_source'];
							$output = "<option value=\"{$content_source_id}\">{$content_source}</option>";
							echo $output;

						}
					
					?>          
                            
                       
                        
                    </select>
		    </div>
                <!-- end .form-group --></div>
		    
		<div class="form-group">
                	<label class="control-label col-sm-2" for="link_text">Link Text:</label>
			<div class="col-sm-10">
			    <input class="form-control" type="text" name="link_text" placeholder="Enter Link Text">
			</div>
		<!-- end .form-group --></div>
                <div class="form-group">
                	<label class="control-label col-sm-2" for="link_href">Web Link/ URL:</label>
			<div class="col-sm-10">
			    <input class="form-control" type="text" name="link_href" placeholder="Enter Link URL here">
			</div>
               <!-- end .form-group --></div>
		<div class="form-group">
                	<label class="control-label col-sm-2" for="link_desc">Link Description:</label>
			<div class="col-sm-10">	
			    <input class="form-control" type="text" name="link_desc" placeholder="Enter Link Description here (OPTIONAL)">
			</div>
                <!-- end .form-group --></div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="link_pic">Link Picture:</label>
			<div class="col-sm-10">	
			    <input class="form-control" type="file" name="link_pic" />
			</div>
		<!-- end .form-group --></div>
		<div class="form-group">   
		    <label class="control-label col-sm-2" for="link_date">Article/ Review Date (if applicable):</label>
		    <div class="col-sm-10">
		    <input type="text" id="datepicker" name="link_date">
		    </div>
		<!-- end .form-group --></div>
		</fieldset>
		<fieldset>
		    <legend>RazaWeb Categorisation</legend>
		    
	    
		<div class="form-group">
		    <div class="control-label col-sm-2"></div>
		    <div class="checkbox col-sm-10">
			<label><input name="quicklink" type="checkbox" value=1>Is This Link also a QuickLink?</label>
		    </div>
		<!-- end .form-group --></div>    
                <div class="form-group">
                    <label class="control-label col-sm-2" for="portal_id">Portal</label>
		    <div class="col-sm-10">	
			<select class="form-control" name="portal_id" id="select1" onchange="showTopic(this.value)">
			          <option selected="selected" disabled="disabled" value="">
				     Select an option
				</option>
			                    <?php
					
					$query = "SELECT * FROM portals";
					$result = $db->query($query);
					while($data = $db->fetch_assoc($result)){
						$portal_id = $data['id'];
						$portal = $data['portal'];
						$output = "<option value=\"{$portal_id}\">{$portal}</option>";
						echo $output;

					}
					
					?>
			</select>
		    </div>
                <!-- end .form-group --></div>

		<div id="txtHint" class="form-group">
                
                <!-- end .form-group --></div>
		
				<div class="form-group">
		    <label class="control-label col-sm-2" for="category_id">Category</label>
		    <div class="col-sm-10">
                    <select class="form-control" name="category_id" onchange="showSubCat1(this.value)">
                    
					<?php
					
						$query = "SELECT * FROM category";
						$result = $db->query($query);
						while($data = $db->fetch_assoc($result)){
							$category_id = $data['id'];
							$category_title = $data['category_title'];
							$output = "<option value=\"{$category_id}\">{$category_title}</option>";
							echo $output;

						}
					
					?>          
                            
                       
                        
                    </select>
		    </div>
                <!-- end .form-group --></div>
		
		<div id="subCat1" class="form-group">
                
                <!-- end .form-group --></div>		
				
			
		<div id="subCat2" class="form-group">
                
                <!-- end .form-group --></div>
		
    
		</fieldset>
		<div class="form-group">        
		    <div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default" name="submit">Submit</button>
		    </div>
		</div>
    
        </form>
	
</section>
<footer>
<?php require_once("admin_footer.php"); ?>
</footer>
<!-- end .container --></div>
    <script src="script2.js"></script>
</body>
</html>
<?php
    // 5. Close connection
    if (isset($connection)){
        mysqli_close($connection);
    }
?> 