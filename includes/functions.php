<?php

// Site root
define("SITE_ROOT", $_SERVER['DOCUMENT_ROOT'] . "razawebv4/");
define("DS", DIRECTORY_SEPARATOR);

function strip_zeros_from_date( $marked_string="" ) {
  // first remove the marked zeros
  $no_zeros = str_replace('*0', '', $marked_string);
  // then remove any remaining marks
  $cleaned_string = str_replace('*', '', $no_zeros);
  return $cleaned_string;
}

function redirect_to( $location = NULL ) {
  if ($location != NULL) {
    header("Location: {$location}");
    exit;
  }
}

function output_message($message="") {
  if (!empty($message)) { 
    return "<p class=\"message\">{$message}</p>";
  } else {
    return "";
  }
}

function __autoload($class_name) {
	$class_name = strtolower($class_name);
  $path = LIB_PATH.DS."{$class_name}.php";
  if(file_exists($path)) {
    require_once($path);
  } else {
		die("The file {$class_name}.php could not be found.");
	}
}

function include_layout_template($template="") {
	include(SITE_ROOT.DS.'layouts'.DS.$template);
}

function log_action($action, $message="") {
	$logfile = SITE_ROOT.DS.'logs'.DS.'log.txt';
	$new = file_exists($logfile) ? false : true;
	if($handle = fopen($logfile, 'a')) { // append
		$timestamp = strftime("%Y-%m-%d %H:%M:%S", time());
		$content = "{$timestamp} | {$action}: {$message}\n";
		fwrite($handle, $content);
		fclose($handle);
		if($new) { chmod($logfile, 0755); }
	} else {
	    echo "Could not open log file for writing.";
	}
}


function datetime_to_text($datetime="") {
  $unixdatetime = strtotime($datetime);
  return strftime("%B %d, %Y at %I:%M %p", $unixdatetime);
}


// This funciton checks if the form field is empty for each form field
function check_required_fields($required_array) {
    $field_errors = array();
    foreach($required_array as $fieldname) {
        if (!isset($_POST[$fieldname]) || (empty($_POST[$fieldname]) &&
            !is_int($_POST[$fieldname]))) {
            $field_errors[] = $fieldname;
        }
    }
    return $field_errors;
}

// This function checks if form filed ah stoo many characters entered into it 
function check_max_field_lengths($field_length_array) {
	global $db;
    $field_errors = array();
    foreach($field_length_array as $fieldname => $maxlength) {
        if (strlen(trim($db->mysql_prep($_POST[$fieldname]))) > $maxlength) {
            $field_errors[] = $fieldname;
        }
    }
    return $field_errors;
}

function display_errors($error_array) {
    echo "<p class=\"errors\">";
    echo "Please review the following fields: <br />";
    foreach($error_array as $error) {
        echo " - " . $error . "<br />";
    }
    echo "</p>";
}


function password_encrypt($password) {
  	$hash_format = "$2y$10$";   // Tells PHP to use Blowfish with a "cost" of 10
	  $salt_length = 22; 					// Blowfish salts should be 22-characters or more
	  $salt = generate_salt($salt_length);
	  $format_and_salt = $hash_format . $salt;
	  $hash = crypt($password, $format_and_salt);
		return $hash;
	}
	
	function generate_salt($length) {
	  // Not 100% unique, not 100% random, but good enough for a salt
	  // MD5 returns 32 characters
	  $unique_random_string = md5(uniqid(mt_rand(), true));
	  
		// Valid characters for a salt are [a-zA-Z0-9./]
	  $base64_string = base64_encode($unique_random_string);
	  
		// But not '+' which is valid in base64 encoding
	  $modified_base64_string = str_replace('+', '.', $base64_string);
	  
		// Truncate string to the correct length
	  $salt = substr($modified_base64_string, 0, $length);
	  
		return $salt;
	}
	
	function password_check($password, $existing_hash) {
		// existing hash contains format and salt at start
	  $hash = crypt($password, $existing_hash);
	  if ($hash === $existing_hash) {
	    return true;
	  } else {
	    return false;
	  }
	}
	
	
		function get_web_path($file_system_path) {
	  return str_replace($_SERVER['DOCUMENT_ROOT'],'images/profpic', $file_system_path);
	  //$main_part =  str_replace('/home4/yellowta/www', '', $file_system_path);
	  //$full = "{$main_part}";
	  //return $full;
	}
	
	function get_web_path_tn_orig($file_system_path) {
	  return str_replace("C:/wamp/www/razawebv4/assets/images/uploads/linkpic/originals/", 'assets/images/uploads/linkpic/tn/', $file_system_path);
	  //$main_part =  str_replace('/home4/yellowta/www', '', $file_system_path);
	  //$full = "{$main_part}";
	  //return $full;
	}
	
	function get_web_path_tn($file_system_path) {
	  $part_to_replace = $_SERVER['DOCUMENT_ROOT'] . "razawebv4/assets/images/uploads/linkpic/originals/";
	  return str_replace($part_to_replace, 'assets/images/uploads/linkpic/tn/', $file_system_path);
	  //$main_part =  str_replace('/home4/yellowta/www', '', $file_system_path);
	  //$full = "{$main_part}";
	  //return $full;
	}

	
	// IMAGE/ PHOTO FILE CREATION CODE:
function createthumbs ($origImagePath,$tnImagePath,$fname,$thumbWidth){
    	/* code to copy image file form originals folder uploaded to,
	    then reduce size to thumbnail,
	    then save in thumbnail directory */
    
    // 1. open the originals directory
        $origdir = opendir($origImagePath);
        
    // 2. Find the original imaeg file
    //$fname = "1397841364-KamalProfPic1.jpg";
    //echo "Creating thumbnail for {$origImagePath}{$fname} <br />";
        
    // 3. load image and get image size
        $img = imagecreatefromjpeg( "{$origImagePath}{$fname}" );
        $width = imagesx( $img );
        $height = imagesy( $img );

    // 4. calculate thumbnail size
        $new_width = $thumbWidth;
        $new_height = floor( $height * ( $thumbWidth / $width ) );

    // 5. create a new temporary image
        $tmp_img = imagecreatetruecolor( $new_width, $new_height );

     // 6. copy and resize old image into new image 
        //imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
	imagecopyresampled( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );

    // 7. save thumbnail into a file
        imagejpeg( $tmp_img, "{$tnImagePath}{$fname}" );
        
    // 8. close the directory
        closedir( $origdir );       
}

function createlargepic ($origImagePath,$largeImagePath,$fname,$thumbWidth){
    	/* code to copy image file form originals folder uploaded to,
	    then reduce size to large,
	    then save in large directory */
    
    // 1. open the originals directory
        $origdir = opendir($origImagePath);
        
       
    // 2. load image and get image size
        $img = imagecreatefromjpeg( "{$origImagePath}{$fname}" );
        $width = imagesx( $img );
        $height = imagesy( $img );

    // 3. calculate thumbnail size
        $new_width = $thumbWidth;
        $new_height = floor( $height * ( $thumbWidth / $width ) );

    // 4. create a new temporary image
        $tmp_img = imagecreatetruecolor( $new_width, $new_height );

     // 5. copy and resize old image into new image 
        //imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
	 imagecopyresampled($tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );

    // 6. save large image into a file
        imagejpeg( $tmp_img, "{$largeImagePath}{$fname}" );
        
    // 7. close the directory
        closedir( $origdir );       
}

function handle_error($user_error_message, $system_error_message) {
	  //session_start();
	  //$_SESSION['error_message'] = $user_error_message;
	  //$_SESSION['system_error_message'] = $system_error_message;
	  header("Location: show_error.php?error_message={$user_error_message}&system_error_message={$system_error_message}");
	  //header("Location: " . get_web_path(SITE_ROOT) . "scripts/show_error.php");
	  exit();
	}

// Set up debug mode
	define("DEBUG_MODE", true);
	
		// Error reporting
	if (DEBUG_MODE) {
	  error_reporting(E_ALL);
	} else {
	  // Turn off all error reporting
	  error_reporting(0);
	}
	
function debug_print($message) {
	  if (DEBUG_MODE) {
		echo $message;
	  }
	}	
	

?>