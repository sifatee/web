<?php
$username="";
$err_uname="";
$pass="";
$err_pass="";
$hasError=false;
$err_message="";
$users=array("sifat"=>"1234");
			 
if($_SERVER["REQUEST_METHOD"]=="POST"){
if(empty($_POST["uname"])){
	$err_uname="Username Required";
	$hasError= true;
}
else {
	$uname= htmlspecialchars($_POST["uname"]);
}
if(empty($_POST["pass"])){
	$err_pass="Password Required";
	$hasError= true;
}
else{
	$pass= htmlspecialchars($_POST["pass"]);
	
}
if(!$hasError){
	$found=false;
	foreach($users as $u=>$p){
	if($u==$uname && $p==$pass){
		//successfull
	    //$found=true;
		//break;
		header("Location: welcomepage.php");
	}
	if(!$found) {
		$err_message="Invalid Username or Password";
	}
	}
}
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="Style/Mystyle.css">
</head>
<body>
<div id="header" class="font-mine">Panda Delivery</p>
</div>
<div id="logindiv">
<table align="center">
<tr>
<td colspan="2" align="center"><span class="err-msg"><?php echo $err_message;?></span></td>
<td><img src="logo/logo.jpg" width="150px" height="100px"></td>
<h1 align="center">Login Form</h1>
<form action="" method="post">
<table> 
<tr>
<td><span class="font-mine">Username: </span></td>
<td><input type="text" placeholder="Username" name="uname">
<br><span class="err-msg"><?php echo $err_uname;?></span>
</td>
</tr>
<tr>
<td><span class="font-mine">Password: </span></td>
<td><input type="password" placeholder="Password" name="pass">
<br><span class="err-msg"><?php echo $err_pass;?></span>
</tr> 
<tr>
<td colspan="2" align="right"><input class="btn-mine" type="Submit" value="Login" name="login">
</tr>
<tr>
</table>
</form>
</div>
<div id="centerheader" class="font-mine2"><h2>Welcome To Panda Delivery</h2></p>
</div>
<div id="footer" class="font-mine">Panda Delivery</p>
</div>
</body>
</html>