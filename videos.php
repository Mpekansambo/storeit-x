<html>
<head>
	<style >
body{
	background-image: url('vinny.jpg');
}
	</style>

</head>
<body >
<div style="position: absolute; top: 1%; width: 100%; background-color:aqua; color: blue; height: 10%; border: 1px solid none; ">
		<h1 style="text-align:center;">VIDEOS</h1>
</div>

	
	<div style="position: absolute; top: 15%; width: 20%; height: 60%; border: 1px solid none">
<form action=""  method="post">
		
		<button type="submit" name="uploadvideo" value="upload video"style="width:96%;left:1.5%;color:black;font-weight: bold;font-size: 20%;background-color:blue; font-size:110%;border:2px solid darkblue;height:15%;top:0%;position: absolute;">Upload</button>
		<button type="submit" name="deletevideo" value="delete video"style="width:96%;left:1.5%;color:black;font-weight: bold;font-size: 20%;background-color:blue; font-size:110%;border:2px solid darkblue;height:15%;top:20%;position: absolute;">Delete</button>
		<button type="submit" name="refreshvedeo" value="refresh video"style="width:96%;left:1.5%;color:black;font-weight: bold;font-size: 20%;background-color:blue; font-size:110%;border:2px solid darkblue;height:15%;top:40%;position: absolute;">Refresh</button>
		<a type="submit" name="Viewvideo" href="readvideos.php"value="refresh video"style="width:96%;text-decoration:none;left:1.5%;color:black;font-weight: bold;font-size: 20%;background-color:blue; text-align:center;line-height:260%; font-size:130%; font-weight:bold; border:2px solid darkblue;height:15%;top:60%;position: absolute;">View Videos</a>
		
</form>


	</div>

    <div style="position: absolute;left: 25%; top: 15%; width: 70%; background-color: grey;height: 60%; border: 1px solid none">         <?php
if(isset($_POST["uploadvideo"])){
include "upvideo.php";
	}
if(isset($_POST["refreshvedeo"])){
 header("location:/storeit/videos.php");
	}else{
		$fetchVideos = mysqli_query($con, "SELECT * FROM videos LIMIT 1");
        //$fetchVideos = mysqli_query($con, "SELECT * FROM videos ORDER BY id DESC LIMIT 1");
        echo "<div style='width:100%;height:100%;top:0%;left:0%;border:2px solid red;position:absolute;'>";
        while($row = mysqli_fetch_assoc($fetchVideos)){
            $location = $row['location'];
			$decrypted_txt = encrypt_decrypt('decrypt', $location);

            echo "<a border:2px solid blue; href='readvideos.php' style='width:100%;height:100%;left:0%;position:absolute;'>";
            echo "<video src='".$decrypted_txt."' controls style='width:100%;height:100%;left:0%;top:0%;position:relative;'/>";
			 echo "</a>";
						
        }
         echo "</div>";
	}
	
?>	</div>
	</body>
</html>