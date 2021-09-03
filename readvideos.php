<?php 
?>
<?php
    include("config.php");
     include("encrypt.php");
?>
<!doctype html>
<html>
    <head>
        <style>
            video{
                float: left;
            }
        </style>
    </head>
    <body>
        <div>
        <?php
		$fetchVideos = mysqli_query($con, "SELECT * FROM videos");
        //$fetchVideos = mysqli_query($con, "SELECT * FROM videos ORDER BY id DESC LIMIT 5");
        echo "<div style='width:30%;height:90%;top:9%;left:0%;border:2px solid red;position:absolute;overflow:scroll;overflow-y:scroll;overflow-x:hidden;'>";
        while($row = mysqli_fetch_assoc($fetchVideos)){
            $location = $row['location'];
			$decrypted_txt = encrypt_decrypt('decrypt', $location);

            echo "<table border:2px solid blue;style='background-color:red;width:100%;height:5%;left:0%;position:relative;'>";
			 echo "<tr border:2px solid blue;style='background-color:red;width:100%;height:5%;left:0%;position:relative;'>";
			  echo "<td border:2px solid blue;style='background-color:white;color:black;width:10%;top:80%;height:20%;left:0%;position:absolute;'>";
            echo "<video src='".$decrypted_txt."' controls style='width:100%;height:100%;left:0%;top:0%;position:relative;'/>";
			 echo "</td>";
			  echo "<td border:2px solid blue;style='background-color:white;color:black;width:100%;top:80%;height:20%;left:0%;position:relative;'>";
              echo "<video src='".$decrypted_txt."' controls style='width:100%;height:100%;left:0%;top:0%;position:relative;'/>";
            echo "</td>";
			echo "</tr>";
			echo "</table>";
						
        }
         echo "</div>";
        echo '<div style="width:60%;height:80%;top:10%;right:5%;border:2px solid green;position:absolute;"></div>';
        ?>
        </div>
        <a type="submit" name="Viewvideo" href="home.php"value="refresh video"style="width:10%;text-decoration:none;left:88%;color:black;font-weight: bold;font-size: 20%;background-color:blue; text-align:center;line-height:260%; font-size:130%; font-weight:bold; border:2px solid darkblue;height:5%;top:0%;position: absolute;">Back</a>

    </body>
</html>