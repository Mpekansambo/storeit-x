<style> 
#firstname{
        color:orange; font-family:verdana; font-size:100%; top:2%;
          width:50%; height:10%; left:19%; text-align:left; //background-color:transparent;
          position:absolute; border:2px solid lightgrey; border-radius:4px;
      }

      #surname{
        color:orange; font-family:verdana; font-size:100%; top:18%;
          width:50%; height:10%; left:19%; text-align:left; //background-color:transparent;
          position:absolute; border:2px solid lightgrey; border-radius:4px;
      }
	  #Gender1{
		  width:6%; 
		  height:6%;
		  left:17%;
		  top:48%;
		  position:absolute;
	  }
	   #Gender{
		  width:6%; 
		  height:6%;
		  left:40%;
		  top:48%;
		  position:absolute;
	  }
	  
	  #fe{
		  width:15%; 
		  height:9%;
		  left:23%;
		  top:39%;
		  position:absolute; 
	  }
	   #ml{
		  width:15%; 
		  height:9%;
		  left:47%;
		  top:39%;
		  position:absolute; 
	  }
</style>
 <div style="width: 100%;height: 100%;top:0%;left: 0%;background-color: transparent;position: absolute;border:2px solid lightgrey;">
		<div style="width: 100%;height: 10%;top: 0%;left: 0%;background-color: white;font-size: 150%;position: absolute;text-align: center;font-weight: bold;">REGISTER</div>
		<form action="server.php" method="POST">
			<input type="text" id="firstname" name="firstname" value="" placeholder="Enter Firstname"><br/><br/>
			<input type="text" id="surname" name="surname" value="" placeholder="Enter Surname"><br/><br>
			<input type="text" name="username" value="" placeholder="Enter Username" style="color:orange; font-family:verdana; font-size:100%; top:35%;width:50%; height:10%; left:19%; text-align: left; //background-color:transparent;
			    position:absolute; border:2px solid lightgrey; border-radius:4px;"><br/>
			<input type="password" name="password" value="" placeholder="Enter Password"style="color:orange; font-family:verdana; font-size:100%; top:57%;width:50%; height:10%; left:19%; text-align: left; //background-color:transparent;
			    position:absolute; border:2px solid lightgrey; border-radius:4px;"><br/><br/>
			<input type="text" name="email" value="" placeholder="Enter Email" style="color:orange; font-family:verdana; font-size:100%; top:74%;width:50%; height:10%; left:19%; text-align: left; //background-color:transparent;
			    position:absolute; border:2px solid lightgrey; border-radius:4px;">
				<input type="radio" id="Gender1" name="Gender" value="female"><h5 id="fe">Female</h5>
				<input type="radio" id="Gender" name="Gender" value="male"><h5 id="ml">Male</h5>
			<input type="submit" name="submitR" value="Register" style="color:white; font-family:verdana; font-size:100%; top:90%;width:23%; height:13%; left:19%; text-align:center;border:none;border-radius: 4px;background-color:darkblue; position:absolute;">
      <a href="index.php" style="padding:1.5%;color:white; font-family:verdana; font-size:100%; top:90%;width:48%; height:7.5%; right:6%; text-align:center;text-decoration:none; border:none;border-radius: 4px;background-color:green; position:absolute;">Already have an Account</a>
		</form>    
</div>
