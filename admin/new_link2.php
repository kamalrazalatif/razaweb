<?php 

require_once("admin_header.php");
require_once("../includes/connection.php");
require_once("../includes/functions.php");
require_once("make_json_topic.php");

if(isset($_POST['submit'])){
    

//Set up variables and SQL Query

//$desc = mysqli_real_escape_string($connection, $_POST['desc']);
//$link = mysqli_real_escape_string($connection, $_POST['link']);
$user_id = 1;
// $user_id = $_SESSION['user_id'];
$portal_id = $_POST['portal_id'];
$topic_id = $_POST['topic_id'];
$sub_topic_1_id = !empty($_POST['sub_topic_1_id']) ? $_POST['sub_topic_1_id'] : 0;
$sub_topic_2_id = !empty($_POST['sub_topic_2_id']) ? $_POST['sub_topic_2_id'] : 0;
$sub_topic_3_id = !empty($_POST['sub_topic_3_id']) ? $_POST['sub_topic_3_id'] : 0;
$sub_topic_4_id = !empty($_POST['sub_topic_4_id']) ? $_POST['sub_topic_4_id'] : 0;
$category_id = $_POST['category_id'];
$content_source_id = $_POST['content_source_id'];
$rank = 0;
$toplinks = 0;
$quicklink = $_POST['quicklink'];
$link_text = $_POST['link_text'];
$link_href = $_POST['link_href'];
$link_desc = $_POST['link_desc'];
$link_date = $_POST['link_date'];
$upload_date = strftime("%Y-%m-%d %H:%M:%S",time());
$upload_filename = "default.jpg";

/*
//files upload - profiel pic upload


		$originals_dir = "../assets/images/uploads/linkpic/originals/";
		$large_dir = "../assets/images/uploads/linkpic/large/";
		$large_width = 190;
		$thumb_dir = "../assets/images/uploads/linkpic/tn/";
		$thumb_width = 120;
		$upload_dir = SITE_ROOT . $originals_dir;
		$image_fieldname = "link_pic";
		
		$php_errors = array(1 => 'Maximum file size in php.ini exceeded',
                    2 => 'Maximum file size in HTML form exceeded',
                    3 => 'Only part of the file was uploaded',
                    4 => 'No file was selected to upload.');
		
		// Make sure we didn't have an error uploading the image
		($_FILES[$image_fieldname]['error'] == 0)
  			or handle_error("the server couldn't upload the image you selected.",
                  $php_errors[$_FILES[$image_fieldname]['error']]);

		// Is this file the result of a valid upload?
		@is_uploaded_file($_FILES[$image_fieldname]['tmp_name'])
		  or handle_error("you were trying to do something naughty. Shame on you!",
						  "Uploaded request: file named '{$_FILES[$image_fieldname]['tmp_name']}'");

		// Is this actually an image?
		@getimagesize($_FILES[$image_fieldname]['tmp_name'])
		  or handle_error("you selected a file for your picture that isn't an image.",
						  "{$_FILES[$image_fieldname]['tmp_name']} isn't a valid image file.");
		
		// Name the file uniquely
		$now = time();
		while (file_exists($upload_filename = $upload_dir . $now .
											 '-' .
											 $_FILES[$image_fieldname]['name'])) {
			//$userpic = $_FILES[$image_fieldname]['name'];
			$now++;
		}

		// Finally, move the file to its permanent location
		@move_uploaded_file($_FILES[$image_fieldname]['tmp_name'], $upload_filename)
		  or handle_error("we had a problem saving your image to its permanent location.",
						  "permissions or related error moving file to {$upload_filename}");
		  
		$original_filename = str_replace($upload_dir,'/',$upload_filename);
		createlargepic($originals_dir,$large_dir,$original_filename,$large_width);
                createthumbs($originals_dir,$thumb_dir,$original_filename,$thumb_width);
                
                
*/		
		
// SQL Query:
$query = "INSERT INTO links (user_id,portal_id,topic_id,sub_topic_1_id,sub_topic_2_id,sub_topic_3_id,sub_topic_4_id,category_id,content_source_id,rank,toplinks,quicklink,link_text,link_href,link_desc,link_pic,link_date,upload_date)
                    VALUES ({$user_id},{$portal_id},{$topic_id},{$sub_topic_1_id},{$sub_topic_2_id},{$sub_topic_3_id},{$sub_topic_4_id},{$category_id},{$content_source_id},{$rank},{$toplinks},{$quicklink},'{$link_text}','{$link_href}','{$link_desc}','{$upload_filename}','{$link_date}','{$upload_date}')";
                    
$result_set = mysqli_query($connection,$query);

	// Check that SQL Query ran OK
	if($result_set){
	    $message = "Yes the Database was updated!";
	} else {
	    $message = "The Query failed to work " . mysqli_error($connection);
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
		
		<form name ="form1" role="form" class="db-update-form form-horizontal" method="post" action="<?php  echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                <fieldset>
		    <legend>Link Information From Source</legend>
		    
		    		    		<div class="form-group">
		    <label class="control-label col-sm-2" for="content_source_id">Content Provider/ Source - Dynamic</label>
		    <div class="col-sm-10">
                    <select class="form-control" name="content_source_id">
                    
					<?php
					
						$query = "SELECT * FROM content_source";
						$result = mysqli_query($connection,$query);
						while($data = mysqli_fetch_assoc($result)){
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
		    <label class="control-label col-sm-2" for="category_id">Category</label>
		    <div class="col-sm-10">
                    <select class="form-control" name="category_id">
                    
					<?php
					
						$query = "SELECT * FROM category";
						$result = mysqli_query($connection,$query);
						while($data = mysqli_fetch_assoc($result)){
							$category_id = $data['id'];
							$category_title = $data['category_title'];
							$output = "<option value=\"{$category_id}\">{$category_title}</option>";
							echo $output;

						}
					
					?>          
                            
                       
                        
                    </select>
		    </div>
                <!-- end .form-group --></div>
		    
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
					$result = mysqli_query($connection,$query);
					while($data = mysqli_fetch_assoc($result)){
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
			
		<div id="txtHint2" class="form-group">
                
                <!-- end .form-group --></div>
		
		<div id="txtHint3" class="form-group">
                
                <!-- end .form-group --></div>
		
		<div id="txtHint4" class="form-group">
                
                <!-- end .form-group --></div>
		
		<div id="txtHint5" class="form-group">
                
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
<p>&copy; Kamal Raza Latif 2015</p>
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