<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$nic = $_POST['nic'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$birth = $_POST['birth'];
$address = $_POST['address'];
$admindisc = $_POST['admindisc'];
$division = $_POST['division'];
$revision = $_POST['revision'];
$email = $_POST['email'];
 
 if(!empty($nic)|| !empty($email)){
 	$host = "localhost";
 	$dbUsername ="root";
 	$dbPassword = "";
 	$dbname = "Online-srilanka";
 	$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
 	 if(mysqli_connect_error()){
 	 	die("connect error('.mysqli_connect_error().')" .mysqli_connect_error());
 	 } else{
 	 	$INSERT =" INSERT INTO register (nic,firstname,lastname,age,birth,address,admindisc,division,revision,email) values (?,?,?,?,?,?,?,?,?,?)";

 	 }
 } else {
 	echo "all field are success";
 	die();
 }
?>
</body>
</html>



<?php

$nic = filter_input(INPUT_POST, 'nic');
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$age = filter_input(INPUT_POST, 'age');
$birth = filter_input(INPUT_POST, 'birth');
$address = filter_input(INPUT_POST, 'address');
$admindisc = filter_input(INPUT_POST, 'admindisc');
$division = filter_input(INPUT_POST, 'division');
$revision = filter_input(INPUT_POST, 'revision');
$email = filter_input(INPUT_POST, 'email');
if (!empty($nic)){
if (!empty($email)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "online-srilanka";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO register (nic,firstname,lastname,age,birth,address,admindisc,division,revision,email)
values ('$nic','$firstname','$lastname','$age','$birth','$address','$admindisc','$division','$revision','$email')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "nic should not be empty";
die();
}
}
else{
echo "email should not be empty";
die();
}
?>