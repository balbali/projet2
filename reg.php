<?php
session_start();
$errmsg_arr = array();
$errflag = false;
// configuration
$dbhost 	= "localhost";
$dbname		= "pdo_ret";
$dbuser		= "root";
$dbpass		= "";

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

// new data

$user = $_POST['uname'];
$password = $_POST['pword'];

if($user == '') {
	$errmsg_arr[] = 'Vous devez entrer votre identifiant!!';
	$errflag = true;
}
if($password == '') {
	$errmsg_arr[] = 'Vous devez entrer votre mot de passe!!';
	$errflag = true;
}

// query
$result = $conn->prepare("SELECT * FROM users WHERE username= :identifiant AND password= :pass");
$result->bindParam(':identifiant', $user);
$result->bindParam(':pass', $password);
$result->execute();
$rows = $result->fetch(PDO::FETCH_NUM);
if($rows > 0) {
header("location: home.php");
}
else{
	$errmsg_arr[] = 'identifiant et mot de passe non trouvés';
	$errflag = true;
}
if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: index.php");
	exit();
}

?>