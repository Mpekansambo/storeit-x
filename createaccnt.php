<center>
 <div id="create" style="width: 40%;background-color:black;height: 80%;top:10%;left:30%;position: absolute;border: 25% solid blue;"></br> 
 <?php
//include "server.php";
?><form action="" method="post">
	<input type="text" style="width: 60%;right:20%;color:black;font-weight:none;height: 08%;top:5%;position:absolute;" placeholder="FirstName" name="text8" autofocus required />
	<input type="text" style="width:60%;top:17%;color:black;right:20%;font-weight:none;height: 08%;position: absolute;" placeholder="Surname" name="text9" autofocus required />
	<input type="text" style="width: 60%;top:29%;right:20%;position:absolute;color:black;font-weight:none;height: 08%;" name="text10" placeholder="Gender" autofocus required />
	<input type="text" style="width: 60%;right:20%;top:40%;position:absolute;color:black;font-weight:none;height: 08%;font-size:100%;" name="text11" placeholder="username" autofocus required /><input type="Password" style="width: 60%;color:black;font-size:100%;font-weight:none;height: 08%;right:20%;bottom: 40%;position: absolute;" placeholder = "Password" name="text12" autofocus required /> <input type="email" style="width: 60%;right:20%;bottom:27%;position:absolute;color:black;font-weight:none;height: 08%;font-size:100%;" name="text13"  placeholder="Your E-Mail" autofocus required />
	<input type="Date" style="width: 60%;right:20%;bottom:15%;position:absolute;color:black;font-weight:none;height: 08%;" name="text14" autofocus required />
	<input type="submit" style="width:24%;height: 08%;bottom:05%;left:51%;position:absolute;font-size:90%;color:white;background-color: grey;text-align:center;" name="submit2" value="SignUp">
	<?php
	echo '<div style="width:80%; height:10%; left:10%; bottom:90%; position:absolute; color:red;">';
echo $error;	
echo '</div>';
	?>
	</form>
	<form action="index.php" method="post">
	<input type="submit" style="width:24%;height: 08%;bottom:05%;left:25%;position:absolute;font-size:90%;color:white;background-color: grey;text-align:center;" name="Login" value="Login">
</form>
	</div>
</center>
	