<html>
<head>
	<style >
body{
	background-image: url('vinny.jpg');
}
	</style>
</head>
<body>
<div style="position: absolute; top: 1%; width: 100%; background-color:aqua; color: blue; height: 10%; border: 1px solid none; ">
		<h1 style="text-align:center;">IMAGE</h1>
</div>
<form action=""  method="post">
	
	<div style="position: absolute; top: 15%; width: 20%; height: 64%; border: 1px solid none">
		
<button name="send" style="width:96%;left:1.5%;color:black;font-weight: bold;font-size: 20%;background-color:blue; font-size:110%;border:2px solid darkblue;font-weight: bold;font-size: 150%;height:15%;top:3%;position: absolute;">share </button>
<button name="viewimage" style="width:96%;left:1.5%;color:black;font-weight: bold;font-size: 20%;background-color:blue; font-size:110%;font-weight: bold;font-size: 150%;border:2px solid darkblue;height:15%;top:20%;position: absolute;">slideshow?</button>
<button type="submit" name="refreshimage" value="refresh video"style="width:96%;left:1.5%;color:black;font-weight: bold;font-size: 20%;font-weight: bold;font-size: 20%;background-color:blue; font-size:150%;border:2px solid darkblue;height:15%;top:38%;position: absolute;">Refresh</button>	
<button type="submit" name="deleteimage" value="refresh video"style="width:96%;left:1.5%;color:black;font-weight: bold;font-size: 20%;font-weight: bold;font-size: 20%;background-color:blue; font-size:150%;border:2px solid darkblue;height:15%;top:56%;position: absolute;">Delete</button>	

</form>
</div>
    <div style="position: absolute;left: 25%; top: 15%; width: 70%; height: 64%; border: 1px solid none; background-color:gray"> <?php
if(isset($_POST['playaudio'])){
include "Audioplay.php";}
if(isset($_POST['playaudio'])){
include "Audioplay.php";}
if(isset($_POST['refreshaudio'])){
header("location:/storeit/music.php");
}
?>	</div>
	</body>
</html>