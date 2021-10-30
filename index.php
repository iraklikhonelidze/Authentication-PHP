<?php 
$title = "Home";
include_once 'includes/header.php' 
?>

<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<a class="btn-dark" href="logout.php">Logout</a>
</br>
</br>
</br>

	<h1>Hello, <?php echo $user_data['user_name'];?></h1>


</body>
</html>