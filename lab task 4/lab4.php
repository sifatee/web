<?php
	
	session_start();

	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$conpass = $_POST['conpass'];
		$gender=$_POST['gender'];
		$date=$_POST['dd'];
		$month=$_POST['mm'];
		$year=$_POST['yyy'];

		if($name == "" ||$username == "" || $email == "" || $password == "" || $conpass == ""){
			echo "Null submission!";
		}
		elseif (strlen($username)<2) {
			echo "Username must be 2 characters";
		}
		elseif (strlen($password)<5) {
			echo "Password must be 5 characters";
		}
		
		else{

			if($password == $conpass){
				$_SESSION['name']=$name;
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$_SESSION['email'] = $email;
				$_SESSION['gender'] = $gender;
				$_SESSION['date'] = $date;
				$_SESSION['month'] = $month;
				$_SESSION['year'] = $year;
				
				header('location: login.php');
			}else{
				echo "password & confirm password mismatch..";
			}
		}
	} 



	 session_start();

    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "" || $password == ""){
            echo "null submission...";
        }else{
           

            if($username == $_SESSION['username'] && $password == $_SESSION['password']){
                $_SESSION['flag'] = true;
                header('location: dashboard.php');
            }else{
                echo "invalid user";
            }
        }

    }



    session_start();

    if(isset($_POST['submit'])){

        $email = $_POST['confirmEmail'];
       

        if($email == ""){
            echo "Enter your email!";
        }
        elseif ($email==$_SESSION['email']) {
           echo "you will get a message!";
        }

    }



?>




<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right">
				<img src="logo.png" align="left" height="70px"> </a>
				<a href="home.php"> Home </a> |				
				<a href="login.php"> Login </a> |				
				<a href="registration.php"> Registration </a>
			</td>
		</tr>
		<tr height = "300px">
			<td align="left">
				<h1>Welcome to XCompany</h1>
			</td>
		</tr>
		<tr height = "30px">
			<td >
				<center> Copyright@2017 </center>
			</td>
		</tr>
	</table>

<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right">
				<a href="home.php"> <img src="logo.png" align="left" height="70px"> </a> 
				<a href="home.php"> Home </a> |				
				<a href="login.php"> Login </a> |				
				<a href="registration.php"> Registration </a>
			</td>
		</tr>
		<tr height = "400px">
			<td align="center">
				
				<form method="POST" action="">
				<fieldset style="width: 30%">
							<legend>REGISTRATION</legend>
							<table>
								<tr>
									<td>Name</td>
									<td>:<input type="text" name="name" value="">  </td>
								</tr>
								<tr>
                                    <td colspan="2">
                                       <hr>
                                    </td>
                                </tr>
								<tr>
									<td>Email</td>
									<td>:<input type="email" name="email" value="">  </td>
								</tr>
								<tr>
                                    <td colspan="2">
                                       <hr>
                                    </td>
                                </tr>
								<tr>
									<td>Userame</td> 		 
									<td>:<input type="text" name="username" value="">  </td>
								</tr>
								<tr>
                                    <td colspan="2">
                                       <hr>
                                    </td>
                                </tr>
								<tr>
									<td>Password</td>     
									<td>:<input type="password" name="password" value=""> </td>
								</tr>
								<tr>
                                    <td colspan="2">
                                       <hr>
                                    </td>
                                </tr>
								<tr>
									<td>Confirm Password</td>
									<td>:<input type="password" name="conpass" value=""> </td>
								</tr>
								<tr>
                                    <td colspan="2">
                                       <hr>
                                    </td>
                                </tr>
		            		</table>
						<fieldset >
						<legend>Gender</legend>
									<input type="radio" name="gender"> Male
									<input type="radio" name="gender"> Female
									<input type="radio" name="gender"> Other
									
						
					   </fieldset>

					   <fieldset >
						<legend>Date Of Birth</legend>
								<input type="text" name="dd" min="1" max="31" size="2"> /
								<input type="text" name="mm" min="1" max="12" size="2"> /
								<input type="text" name="yyy" min="1950" max="2050" size="2"> (dd/mm/yyy)
						
						</fieldset>
					<br>
					
							<input type="submit" name="submit" value="Submit">
							<input type="reset" name="reset" value="Reset">
				
					</fieldset>
				</form>
				<br>
			</td>
		</tr>
		<tr height = "50px">
			<td >
				<center> Copyright@2017 </center>
			</td>
		</tr>
	</table>
<table border="1" width="100%" cellspacing="0">
        <tr>
            <td align="right">
                <a href="home.php"><img src="logo.png" align="left" height="70px"></a>
                <a href="home.php"> Home </a> |             
                <a href="login.php"> Login </a> |               
                <a href="registration.php"> Registration </a>
            </td>
        </tr>
        <tr height = "400px">
            <td align="center">
                <form method="POST" action="">
                    <fieldset style="width: 20% " >
                        <legend>LOGIN</legend>
                        <table >
                            <tr>
                                <td>User Name</td>
                                <td>:<input type="text" name="username"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:<input type="password" name="password"></td>
                            </tr>
                        </table>
                        <hr>
                        <input type="checkbox" name="">Remember Me
                        <br>
                        <input type="submit" name="submit" value="Submit">
                        <a href="forgetPassword.php">Forget Password?</a>
                    </fieldset>
                </form>
                
            </td>
        </tr>
        <tr height = "30px">
            <td >
                <center> Copyright@2017 </center>
            </td>
        </tr>
    </table>
 <table border="1" width="100%" cellspacing="0">
        <tr>
            <td align="right">
                <a href="home.php"><img src="logo.png" align="left" height="70px"></a>
                <a href="home.php"> Home </a> |             
                <a href="login.php"> Login </a> |               
                <a href="registration.php"> Registration </a>
            </td>
        </tr>
        <tr height = "400px">
            <td align="center">
                <form method="POST" action="">
                    <fieldset style="width: 20% " >
                        <legend>FORGET PASSWORD</legend>
                        <table >
                            <tr>
                                <td>Enter Email</td>
                                <td>:<input type="email" name="confirmEmail"></td>
                            </tr>
                            
                        </table>
                        <hr>
                        
                        <input type="submit" name="submit" value="Submit">
                        
                    </fieldset>
                </form>
                
            </td>
        </tr>
        <tr height = "30px">
            <td >
                <center> Copyright@2017 </center>
            </td>
        </tr>
    </table>


    <table border="1" width="100%" cellspacing="0">
        <tr>
            <td align="right" colspan="2">
                <a href="home.php"><img src="logo.png" align="left" height="70px"></a>
                Logged in as <?php echo $_SESSION['username'] ?>|
                <a href="logout.php">Logout</a>
            </td>
        </tr>
        <tr height = "500px">
            				<td align="left" width="500px" >
               
                            		<h3>Account</h3>
                            		<hr size="1">
                            		<ul>
										<li><a href="dashboard.php">Dashboard</a></li>
										<li><a href="viewprofile.php">View Profile</a></li>
										<li><a href="editprofile.php">Edit Profile</a></li>
										<li><a href="changepicture.php">Change Profile Piture</a></li>
										<li><a href="changepassword.php">Change Password</a></li>
										<li><a href="logout.php">Logout</a></li>
									</ul>
                            	
                                                                                                    
           					 </td>
            					<td  align="left">
                            		<h3>Welcome <?php print_r($_SESSION['username']) ?> </h3>
                            	</td>
        </tr>
        <tr height = "30px">
            <td colspan="2">
                <center> Copyright@2017 </center>
            </td>
        </tr>
    </table>

<table border="1" width="100%" cellspacing="0">
        <tr>
            <td align="right" colspan="2">
                <a href="home.php"><img src="logo.png" align="left" height="70px"></a>
                Logged in as <?php echo $_SESSION['username'] ?>|
                <a href="logout.php">Logout</a>
            </td>
        </tr>
        <tr height = "500px">
            				<td align="left" width="300px" >
               
                            		<h3>Account</h3>
                            		<hr size="1">
                            		<ul>
										<li><a href="dashboard.php">Dashboard</a></li>
										<li><a href="viewprofile.php">View Profile</a></li>
										<li><a href="editprofile.php">Edit Profile</a></li>
										<li><a href="changepicture.php">Change Profile Piture</a></li>
										<li><a href="changepassword.php">Change Password</a></li>
										<li><a href="logout.php">Logout</a></li>
									</ul>
                            	
                                                                                                    
           					 </td>
            					<td height="300px" colspan="2" align="center">
                                    <br>
                                    <fieldset style="width: 30%">
                                        <legend> PROFILE </legend>
                                        <table>
                                            <tr>
                                                <td>
                                                    Name:
                                                </td>
                                                <td colspan="2">
                                                    <?php echo $_SESSION['name'] ?>
                                                </td>

                                                <td rowspan="5">
                                                    
                                                    <img src="user.png" width="200" height="200">
                                                    <a href="changepicture.php"> Change </a> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email:
                                                </td>
                                                <td>
                                                    <?php echo $_SESSION['email'] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Gender:
                                                </td>
                                                <td>
                                                    <?php echo $_SESSION['gender'] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Date of Birth:
                                                </td>
                                                <td>
                                                    <?php 
                                                    echo $_SESSION['date'].'/'. $_SESSION['month'].'/'.$_SESSION['year'] 

                                                    ?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr></td>
                                            </tr>
                                            
                                            <tr>
                                                <td colspan="2"> 
                                                    <a href="editProfile.php"> Edit Profile </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                    <br> 
                            </td>
        </tr>
        <tr height = "30px">
            <td colspan="2">
                <center> Copyright@2017 </center>
            </td>
        </tr>
    </table>

</body>
</html>