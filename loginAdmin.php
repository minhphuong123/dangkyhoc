<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
</head>
<body>
	<?php 
	if (isset($_POST['oke'])) {
	$user=addslashes($_POST['adusername']);
	$pass=addslashes($_POST['adpassword']);
	if($user =="admin"&&$pass=="admin")
		include_once('trangchu2.php');
	else
		header("Location: admin.php");
}
exit();
	 ?>


</body>
</html>