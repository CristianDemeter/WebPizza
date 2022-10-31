
<?php

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','corso_micro');

// get the post records
$name = $_POST['name'];
$id = $_POST['id'];
$email = $_POST['email'];
$hashpassword = $_POST['hashpassword'];


// database insert SQL code
$sql = "INSERT INTO `user` (`name`, `id`, `email`, `hashPassword`) VALUES ('$name', '$id', '$email', '$hashpassword')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>
