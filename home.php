<!DOCTYPE html>
<?php
session_start();
?>
<?php
//include("convice.php");
if(!isset($_SESSION['username'])){
header("Location:index.php");
die();	
}
?>
<html>
<head>
	<title>home</title>
<style type="text/css">
.nn{
	position: absolute; left: 10%; width: 80%; height: 20%; border: 1px solid none; text-align: center; top: 2%; background: black; color: white;
}

.h{
	font-size: 800%;
	 font-family: chiller; 
background-color:red;
width:90%;
height:80%;top:10%;left:05%;
position: absolute;
border: 1px solid red;
}

.hea{
	font-size: 800%;
	 font-family: chiller; 
background-color:blue;
width:80%;

height:5%;top:24%;left:10%;
position: absolute;
border: 1px solid none;
}

.mm{
position: absolute; left: 10%; width: 80%;opacity:0.5; height: 62%; border: 1px solid none;top: 30%;opacity:05; background: black; color: white;	
}
button{
	position: absolute; top:52%; left:44%; 
}
</style>
</head>
<body style="background-image: url('vinny.jpg');">
<div class ="nn" style="opacity:0.8;">
	<?php
	include "encrypt.php";
	
        include("config.php");
             if(isset($_POST['but_upload'])){
            $maxsize = 100000000; // 5MB
                       
            $name = $_FILES['file']['name'];
            $target_dir = "videos/";
            $target_file = $target_dir . $_FILES["file"]["name"];

            // Select file type
            $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Valid file extensions
            $extensions_arr = array("mp4","avi","3gp","mkv","mpeg","MOV");

            // Check extension
            if(in_array($videoFileType,$extensions_arr)){
                
                // Check file size
                if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                    echo "File too large. File must be less than 5MB.";
                }else{
                    // Upload
                    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                        // Insert record
						$encrypted_txt = encrypt_decrypt('encrypt', $name);
						$encrypted_txt1 = encrypt_decrypt('encrypt', $target_file);
                        $query = "INSERT INTO videos(name,location) VALUES('".$encrypted_txt."','".$encrypted_txt1."')";

                        mysqli_query($con,$query);
                        echo "<script>alert('file aploaded succesfully');</script>";
                    }
                }

            }else{
                $name = $_FILES['file']['name'];
            $target_dir = "others/";
            $target_file = $target_dir . $_FILES["file"]["name"];

            // Select file type
            $othersFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Valid file extensions
           // $extensions_arr1 = array("mp3","txt","pdf","doc","png","jpg");
            //if(in_array($othersFileType,$extensions_arr1)){
            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                $encrypted_txt = encrypt_decrypt('encrypt', $name);
                        $encrypted_txt1 = encrypt_decrypt('encrypt', $target_file);
                        $query = "INSERT INTO others(name,location) VALUES('".$encrypted_txt."','".$encrypted_txt1."')";

                        mysqli_query($con,$query);
                        echo "<script>alert('invalid file added in recycle bin');</script>";

            //}
            }
			}
        }
         if(isset($_POST['viewimage1'])){
            $maxsize = 100000000; // 5MB
                       
            $name = $_FILES['file']['name'];
            $target_dir = "images/";
            $target_file = $target_dir . $_FILES["file"]["name"];

            // Select file type
            $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Valid file extensions
            $extensions_arr = array("jpg","png");

            // Check extension
            if( in_array($videoFileType,$extensions_arr) ){
                
                // Check file size
                if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                    echo "File too large. File must be less than 5MB.";
                }else{
                    // Upload
                    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                        // Insert record
                        $encrypted_txt = encrypt_decrypt('encrypt', $name);
                        $encrypted_txt1 = encrypt_decrypt('encrypt', $target_file);
                        $query = "INSERT INTO images(name,location) VALUES('".$encrypted_txt."','".$encrypted_txt1."')";

                        mysqli_query($con,$query);
                        echo "<script>alert('file aploaded succesfully');</script>";
                    }
                }

            }else{
                echo "<script>alert('you aploaded invalid file');</script>";
        
        
        }
        }
		 if(isset($_POST['uploadaudio'])){
            $maxsize1 = 10000000000; // 5MB
                       
            $name = $_FILES['file']['name'];
            $target_dir = "Audio12/";
            $target_file = $target_dir . $_FILES["file"]["name"];

            // Select file type
            $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Valid file extensions
            $extensions_arr = array("mp3","mp4");

            // Check extension
            if( in_array($videoFileType,$extensions_arr) ){
                
                // Check file size
                if(($_FILES['file']['size'] >= $maxsize1) || ($_FILES["file"]["size"] == 0)) {
                    echo "File too large. File must be less than 5MB.";
                }else{
                    // Upload
                    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                        // Insert record
                        $encrypted_txt = encrypt_decrypt('encrypt', $name);
                        $encrypted_txt1 = encrypt_decrypt('encrypt', $target_file);
                        $query = "INSERT INTO audios(name,location) VALUES('".$encrypted_txt."','".$encrypted_txt1."')";
                        mysqli_query($con,$query);
                        echo "<script>alert('file aploaded succesfully');</script>";
                    }
               }

            }elseif(in_array($videoFileType,$extensions_arr)!=TRUE){

            echo "<script>alert('not allowed to do solid');</script>";
            }
            else{
                echo "<script>alert('gjhfjtcytjjumj');</script>";
        }
        }

        if(isset($_POST["logout"])){
        	header("location:/storeit/index.php");
        }elseif(isset($_POST["image"])){
        	
        }
        
        ?>



	<div class='h'>
	STOREit </div>
</div>
<div class='hea'>
<form action="" method="post">
<button type="submit" id="name" name="home" style="position: absolute;left: 0%;width:20%;height:100%;TOP:0%;background-color: transparent;font-weight: bold;font-size: 20%;">HOME</button>
<button type="submit" id="name" name="music" style="position:absolute;left: 20%;width:20%;height:100%;TOP:0%;background-color: transparent;font-weight: bold;font-size: 20%;">MUSIC</button>
<button type="submit" id="name" name="video" style="position: absolute;left: 40%;width:20%;height:100%;TOP:0%;background-color: transparent;font-weight: bold;font-size: 20%;">VIDEO</button>
<button type="submit" id="name" name="image" style="position: absolute;left: 60%;width:20%;height:100%;TOP:0%;background-color: transparent;font-weight: bold;font-size: 20%;">IMAGE</button>
<button type="submit" id="name" name="logout" style="position: absolute;left: 80%;width:20%;height:100%;TOP:0%;background-color: transparent;font-weight: bold;font-size: 20%;">LOGOUT</button>

</form>
</div>

</div>

<div class="mm">
<?php
if(isset($_POST["image"])){
	include "image.php";
}
elseif(isset($_POST["video"])){
	include "videos.php";
}
elseif(isset($_POST["home"])){
	include "frontdesk.php";
}
elseif(isset($_POST["music"])){
	include "music.php";
}else
include "frontdesk.php";
?>
</div>
</body>
</html>