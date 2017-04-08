<?php
//var_dump($_POST);

if ( !isset($_POST['name'])|| empty($_POST['name'])){
	echo "Please fill in First name";
}
else{
	$name = trim($_POST['name']);
	echo "your name is ".$_POST['name'];
}

//mysql_connect($namahost,$namauser,$password)

$conn=mysqli_connect('localhost','root','','mudah');
 if(!$conn){
  die('cannot connect to database');
}


$sql="INSERT INTO user(name) VALUES('$name')";
mysqli_query($conn,$sql)or die("Cannot Insert Database");
mysqli_close($conn);

echo '<br>';
echo 'successfully submit<br>';
echo '<a href="test.php">Back To order</a>';



?>