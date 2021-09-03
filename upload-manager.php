<?php
session_start();
?>
<?php
if(!isset($_SESSION['Email']) && !isset($_SESSION['password'])){
	header("location:https://192.168.43.211/storeit-x/");
	die();
}
$email = $_SESSION['Email'];
$password = $_SESSION['password'];
?>
<?php
include "encrypt.php";
include('encryptFile.php');
include('decryptFile.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_FILES["file"]) && $_FILES["file"]["error"] == 0){
        $allowed = array("pdf" => "application/pdf", "txt" => "application/txt", "html" => "application/html");
        $filename = $_FILES["file"]["name"];
        $filetype = $_FILES["file"]["type"];
        $filesize = $_FILES["file"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB minimum
        $maxsize = 100* 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("uploadd/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["file"]["tmp_name"], "uploadd/" . $filename);
				$myfile = fopen("c:\\xampp\\htdocs\\storeit-x\\documents\\uploadd\\$filename","r+") or die("unable to open file");
				$you=fread($myfile,filesize("uploadd\\" .$filename));
$fileName = "$filename";
$key = 'my secret key';
$ui = file_put_contents($fileName,$you);
$ui1 = encryptFile($fileName, $key,  $fileName.'.enc');
$ui2 = decryptFile($fileName. '.enc',$key, $fileName.'.dec');
			//move_uploaded_file("documents/" .encryptFile($fileName, $key,$fileName1. '.enc'));
fclose($myfile);
				$location="documents/uploadd/" . $filename;
				$encrypted_txt = encrypt_decrypt('encrypt', $filename);
				$encrypted_txt1 = encrypt_decrypt('encrypt', $location);
				include('conn2.php');
				mysqli_query($con,"insert into documents(name,location,email) values ('".$encrypted_txt."','".$encrypted_txt1."','".$email."')");
				//we have insterted the selected files into the Mysql database after encrypting them.
				header("location:https://192.168.43.79/storeit-x/services.php");
				  
				  echo "<script>alert('Document uploaded succesfully' . $filename);</script>";
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
			echo $filetype; echo  $allowed;
        }
    }else{
        echo "Error: " . $_FILES["file"]["error"];
    }
}
?>