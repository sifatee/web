<?php
	
	
	
	if(isset($_POST['submit']))
	{

		
		$Newpass=$_POST['Npassword'];
		$Currpass=$_POST['Cpassword'];	

		if ($Newpass!=$Currpass) {
			echo "please retype password!";
		}
			
	}

if(isset($_POST['submit']))
	{

		$currPass = $_POST['Cpassword'];
		$newPass=	$_POST['Npassword'];	
			
		$RePass=	$_POST['Rpassword'];

		if($currPass==$newPass||$newPass!=$RePass)	{
			echo "try again";
		}
	}

if(isset($_POST['submit']))
	{

		$name = $_POST['myname'];
		$password=$_POST['password'];
				
			if(strlen($name)>=2&&strlen($password)>=8){
				for ($i=0; $i < strlen($password); $i++) { 
					if($password[$i] === '@' || $password[$i] === '#' || $password[$i] === '$' || $password[$i] === '%')
					{
						echo "Success!!";
					}
				}
			}	
			else
			{
				echo "try again!!";
			}
	}

?>






<!DOCTYPE html>

<html>
<head>
	<title>Picture</title>
	<title>Registration</title>


</head>
<body>


<form method="POST" action="">
		<fieldset>
			<legend>LOGIN</legend>
			Userame : <input type="text" name="myname" value="">  <br>
			Password: <input type="password" name="password" value=""> <br><br>
			<input type="checkbox" name="check"> Remember Me
			<br><br>
				<input type="submit" name="submit" value="Submit"> Forget Password?
		</fieldset>
	</form><br><br>



<form method="POST" action="">
		<fieldset>
			<legend>CHANGE PASSWORD</legend>
			Current Password   : <input type="password" name="Cpassword" value="">  <br><br>
			New Password       : <input type="password" name="Npassword" value=""> <br><br>
			Retype New Password: <input type="password" name="Rpassword" value=""> <br><br>
			
				<input type="submit" name="submit" value="Submit"> Forget Password?
		</fieldset><br>




	<form method="POST" action="">
		<fieldset>
			<legend>PROFILE PICTURE</legend>
			<input type="file" name="image" value="">
				<input type="submit" name="submit" value="Submit"> 
		</fieldset>
	</form><br>



	<form method="POST" action="">
		<fieldset>
			<legend>REGISTRATION</legend>
			<table>
				<tr>
				<td>Name</td>
				<td>:<input type="text" name="myname" value="">  </td>
				</tr>
				<tr>
				<td>Email</td>
				<td>:<input type="email" name="email" value="">  </td>
				</tr>
				<tr>
				<td>Userame</td> 		 
				<td>:<input type="text" name="myname" value="">  </td>
				</tr>
				<tr>
					<td>Password</td>     
					<td>:<input type="password" name="Npassword" value=""> </td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td>:<input type="password" name="Cpassword" value=""> </td>
				</tr>
            </table>
			<fieldset >
			<legend>Gender</legend>
						<input type="radio" name="genderM"> Male
						<input type="radio" name="genderF"> Female
						<input type="radio" name="genderO"> Other
						
			
		   </fieldset>

		   <fieldset >
			<legend>Date Of Birth</legend>
					<table>
						
						<tr>
							<td><input type="text" name="dd" value="" placeholder=""></td>
							<td><input type="text" name="mm" value="" placeholder=""></td>
							<td><input type="text" name="yyy" value="" placeholder=""></td>
							<td>(dd/mm/yyy)</td>
						</tr>
					</table>
			
		</fieldset>
			<br>
				<input type="submit" name="submit" value="Submit">
				<input type="reset" name="reset" value="Reset">
		</fieldset>
	</form>













</body>
</html>