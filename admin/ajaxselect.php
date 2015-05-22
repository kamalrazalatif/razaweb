<?php

require_once("../includes/connection.php");
require_once("../includes/functions.php");

?>

<!DOCTYPE html>
<html>
<head>
<script>
function showTopic(str)
{
var xmlhttp;    
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","gettopics.php?q="+str,true);
xmlhttp.send();
}
function showSubTopic(str2)
{
var xmlhttp;    
if (str2=="")
  {
  document.getElementById("txtHint2").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint2").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getsubtopics.php?q="+str2,true);
xmlhttp.send();
}
</script>
</head>
<body>

<form action=""> 

    
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

<div id="txtHint">

</div>
<div id="txtHint2">

</div>
</form>



</body>
</html>
