<div style="width:60%;left:20%;opacity:0.8;background-color:grey;height: 75%;top:10%;border:1px solid none;position: absolute;">
<center>
<?php
if(isset($_POST["uploadvideo"])) 
{
	include "upvideo.php";
	}
	if(isset($_POST["uploadimage"])){
		include("upimage.php");
		}
		if (isset($_POST["uploaddocument"])) {
			include("updocument.php");
		}
		if (isset($_POST["submit1"])) {
			include("UploadAudio.php");
		}
		if (isset($_POST["viewdocument"])) {
			include("viewdocument.php");
		}
		else{
		echo "<center style='font-size:200%;'>Welcome to STOREit</center>";
		}?></center>
		<?php if(isset($_POST['viewvideo'])){
include "readvideos.php";}
if(isset($_POST['viewimage'])){
include "viewimage.php";}


?>	
</div>


