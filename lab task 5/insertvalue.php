
<?php
$name = $_POST['name'];
$Bprice = $_POST['Bprice'];
$Sprice = $_POST['Sprice'];

$dbconnect=mysqli_connect('localhost','root','','product_db');
$sql=mysqli_query($dbconnect,"insert into product(s_no, name,Bprice,Sprice) values ('','$name','$Sprice','$Bprice')" );
if ($sql){

	echo "data inserted successfully";

}
else {

	echo "Failed to insert";
}

?>
