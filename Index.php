<!DOCTYPE html>
<html>
<head>
	<title>
		STOREit
	</title>
	<style>
	body {
		background-color: transparent;
		background-repeat: repeat;
		position: fixed;
		width: 100%;
		height: 100%;
	}
	    h2{color:lightblue;
		    font-family:Timenewroman; font-size:150%; top:10%; width:90%; height:20%;
		   left:5%; right:0%; //background-color:green; position:absolute;
		}
	  
		p{color:green}

		.header{
			height:16%; width:100%; left:0px;
		  right:0px;
		  top:0px;
		  border-radius: 10px;
		background-color:black;   
		  position:absolute;
		  }
		  .poonela{
		  width:100%;
		  height:100%;
				//overflow:scroll;
				//overflow-x:hidden;
				//overflow-y:scroll;
		  border-radius: 10px;
		  background-color:transparent;
		  top:0%;
		  left:0%;
		  position:absolute;
		  }
		  .CPSSlogin{
		  width:45%;
		  height:70%;
		  border-radius: 10px;
		  background-color:transparent;
		  top:10%;
		  left:29%;
		  position:absolute;
		  }

		  form{
		  	position: absolute;
		  	top: 13%;
		  	left: 0%;
		  	width: 100%;
		  	height: 80%;
		  }

		  .message{
		  color:white;
			    font-family:verdana;
			   font-size:150%;
			   top:60%;
			   width:25%;
			   height:50%;
			   left:10%;
			   right:0%;
			   text-align:center;
			   background-color:transparent;
			   position:absolute;
		  }
		  .message1{
		  color:white;
			    font-family:verdana;
			   font-size:150%;
			   top:60%;
			   width:25%;
			   height:50%;
			   left:40%;
			   right:0%;
			   text-align:center;
			   background-color:transparent;
			   position:absolute;
		    }
		    .message2{
	        	color:white; font-family:verdana; font-size:150%; top:50%; width:25%; height:50%;
			    left:75%; right:0%; text-align:center; background-color:transparent;
			    position:absolute;
		    }

		    #Password{
				color:orange; font-family:verdana; font-size:100%; top:35%;
			    width:50%; height:10%; left:25%; text-align: left; //background-color:transparent;
			    position:absolute; border:2px solid lightgrey; border-radius:4px;
			}
			#Username{
				color:orange; font-family:verdana; font-size:100%; top:15%;
			    width:50%; height:10%; left:25%; text-align:left; //background-color:transparent;
			    position:absolute; border:2px solid lightgrey; border-radius:4px;
			}

			#Login{
				color:white; font-family:verdana; font-size:100%; top:55%;
			    width:50%; height:13%; left:25.5%; text-align:center;border:none;border-radius: 4px; 
			    background-color:green; position:absolute;
			}

			#Forgetpass{
				color: darkblue; font-family:verdana; font-size:100%; top:73%;
			   	width:40%; height:11%; left:30%; text-align:center;
			    background-color:transparent; position:absolute; border:none;
			}

			#register{
				color:white; font-family:verdana; font-size:100%; top:85%;
			    width:50%; height:13%; left:25.5%; text-align:center;border:none;border-radius: 4px; 
			    background-color:darkblue; position:absolute;
			}

			h1{
			color:blue;
			    font-family:verdana; font-size:200%; top:12%; width:15%;
			   height:5%; left:40%; text-align:center; background-color:transparent;
			   position:absolute; border:none;
			}

			.er{
			width:60%;	height:5%;position: absolute;text-align: center;color: darkred;background-color: transparent;top:68%;
			left:20%;
			}
	</style>

</head>
<body>
	
<?php
include("convice.php");
include("server.php");
?>
<div class="CPSSlogin">
	<div class="poonela">
		<div class="header">
			<div class="message">
				<div style="background-color:transparent;width:100%;left:0%;height:20%;top:90%;position:absolute;"></div>
			</div>
			<div class="message1">
				<div style="background-color:transparent;width:100%;left:0%;height:20%;top:90%;position:absolute;"></div>
			</div>
			<div class="message2">
				<div style="background-color:transparent;width:100%;left:0%;height:20%;top:90%;position:absolute;"></div>
			</div>
			<h2 align="center">STOREit Data Security System</h2>
		</div>
		<div style="width: 70%;height: 60%;left: 15%;bottom: 10%;background-color:transparent;position: absolute;">
		<?php
		if(isset($_POST['submit2'])){
			include('register.php');
		}elseif(isset($_POST['submit1'])){
			include('forgetpass.php');
		}elseif (isset($_POST['submit_email'])) {
			include('forgetpass.php');
		}elseif(isset($_POST['submit_email1'])){
			include('login.php');
		}
		else{
			include('login.php');
		}?>
	</div>
	
</div>
</div>
<?php
	?>
</body>
</html>