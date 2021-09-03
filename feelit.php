<?php
include "config.php";
?>
<?php

if(isset($_POST["addbutton"])){
  $maxsize = 5242880;
  $name = $_FILES["file"] ["pic"];
$target_dir = "images/";
  $target_file = $target_dir . $_FILES['file'] ['pic'];

  //select file type
  $videofiletype = strtolower(pathinfo ($target_file, PATHINFO_EXTENSION));
//valid file sxtension
$extension_arr = array("jpg","png","gif");
  //check ectension
  if(in_array($videofiletype, $extension_arr)){
if(($_FILES['file']['size'] >= $maxsize) || ($_FILES['file']['size'] == 0 )){
  echo "file too large. File must be less than 5MB.";
}else if(move_uploaded_file ($_FILES['file']['tmp_name'], $target_file)){
    //insert record
$query =( "(insert INTO image")values('$name','$targetdir')");
$uk=mysqli_query($con, $query);
if($uk==TRUE){
echo "upload sucessful";
}
echo $name; echo" ";echo  $target_file;
  }
  }
}else {
  echo "invalid file extension";
}

 ?>