<?php
if (isset($_POST["order"]))
{
	header("location: Restaurants.php");
}
?>
<html>
<body>

      <link rel="stylesheet" type="text/css" href="Style/Mystyle.css">

<div class="leftheader">
     <td><img src="logo/logo.jpg" width="150px" height="100px"></td>
     <h1>Welcome To Panda Delivery</h1>
     <li><a href="">My Profile</a></li>
     <li><a href="">My Orders</a></li>
     <li><a href="">My Settings</a></li>
     <li><a href="">Log out</a></li>
</div>

  <div id="header" class="font-mine">Panda Delivery</p></div>
  <div id="footer" class="font-mine">Panda Delivery</p></div>
  <div id="centerheaderwelcomepage" class="font-mine2">
                          <h2>Are You Hungry?</h2></p>
                          <p>We Have Covered 100+ Restaurants In Your Area</p> 
</div>

<div id="orderdiv">
<table align="center">
<tr>
<!<td><img src="logo/burger.jpg" width="220px" height="150px"> <img src="logo/pasta.jpg" width="220px" height="150px"></td>>

<tr>
<form name="welcome" action="" method="post">
<td colspan="2" align="bottom"><input class="btn-order" type="Submit" value="Order Now" name="order">
</form>
</div>
</tr>

</div>
</body>
</html>