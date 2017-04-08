<?php
$product_id=$_pOST['product_id'];
if (|isset($_POST['inpname'])||empty($_POST['inpname']){
	echo 'Input empty';
	}
$name= $_POST['inpname'];
$conn=mysqli_connect('localhost', 'root', '', 'mudah');

if (|$conn){
	die('Cannot connect to database');
	}
	
$desc='TEST';

$sql="UPDATE product SET name='$name' WHERE id="$product_id";
$result=mysqli_query($conn, $sql);

if ($result){
	echo "Update succesful";
	}
else {
	echo "Cannot update table";
	}
echo '<br/>
?>
