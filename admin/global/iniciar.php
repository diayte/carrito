<?php
include "conexion.php";
$mesage1='';
if (isset($_POST['login'])) {

	$user=$_POST['user'];
	$pass=$_POST['pass'];
try {
	$sql= "  SELECT * FROM login WHERE email=:user";
	$stmt=$db->prepare($sql);
	$stmt->bindParam(":user",$user);
	$stmt->execute();
	$results=$stmt->fetch(PDO::FETCH_ASSOC);
	if (count($results)>0  && password_verify($pass,$results['contrasena'])) {
		session_start();
		$_SESSION["nombre"]=$user;

		header("location:index1.php");
	}else{
	 $mesage1="usuario incorecto";
		exit();
	}
} catch (PDOexception $th) {
	die("fallo" . $th->getMessage());
}
	
	

}



?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>login</h1>
	<?php if(!empty($mesage1)) :?>
	<p><?= $mesage1 ?></p>
	<?php endif?>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
		
		user<input type="text" name="user"><br><br>
		pass<input type="password" name="pass"><br><br>
		<input type="submit" value="login" name="login">
		<a href="registre.php">registrar</a>
	</form>
</body>
</html>
