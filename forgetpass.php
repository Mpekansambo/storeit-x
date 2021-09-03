<?php
if(isset($_POST['submit_email']) && ($_POST['email']))
{
	$email=$_POST['email'];
  $mysqli = new mysqli("localhost", "root", "", "cassavapss");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
  $select=$mysqli->query("select email,password from registration where email='$email'");
  $select1=$select->num_rows;

  if($select1==1)
  {
    while($row = $select->fetch_assoc())
    {
      $email=md5($row['email']);
      $pass=md5($row['password']);
      
    }$error="Password sent to Email, get password and go to LOGIN";
  }
}
elseif(isset($_POST['submit_email']) && empty($_POST['email']))
	{
		$error="Enter email";
	}
else
	{
		$error="";
	}

    /*
    $link="<a href='www.samplewebsite.com/reset.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";
    require_once('phpmail/PHPMailerAutoload.php');
    $mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "your_email_id@gmail.com";
    // GMAIL password
    $mail->Password = "your_gmail_password";
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    $mail->From='your_gmail_id@gmail.com';
    $mail->FromName='your_name';
    $mail->AddAddress('reciever_email_id', 'reciever_name');
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Click On This Link to Reset Password '.$pass.'';
    if($mail->Send())
    {
      echo "Check Your Email and Click on the link sent to your email";
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }	
}
*/?>
<style>
.er{
			width:60%;	height:5%;position: absolute;text-align: center;color: darkred;background-color: transparent;top:63%;
			left:20%;
			}
</style>
<div style="width: 100%;height: 100%;top:0%;left: 0%;background-color: transparent;position: absolute;border:2px solid lightgrey;">
	<div style="width: 100%;height: 10%;top: 0%;left: 0%;background-color: white;font-size: 150%;position: absolute;text-align: center;font-weight: bold;">Forgot Password</div>
	<form method="post" action="">
      <p style="position: absolute;background-color:transparent;width:100%;text-align: center;font-size: 120%;color: black;">Enter Email Address To Send Password Link</p>
      <input type="text" name="email" style="color:black; font-family:verdana; font-size:100%; top:25%;
			    width:50%; height:10%; left:25%; text-align:left; //background-color:transparent;
			    position:absolute; border:2px solid lightgrey; border-radius:4px;">
      <input type="submit" name="submit_email" value="Send" style="color:white; font-family:verdana; font-size:100%; top:45%;
			    width:50%; height:13%; left:25.5%; text-align:center;border:none;border-radius: 4px; 
			    background-color:green; position:absolute;">
	  <input type="submit" name="submit_email1" value="Login" style="color:white; font-family:verdana; font-size:100%; 
	  			top:80%; width:45%; height:13%; left:27.9%; text-align:center;border:none;border-radius: 4px; 
			    background-color:green; position:absolute;">
    </form>

    <span class="er"><?php echo $error;?></span>

</div>
