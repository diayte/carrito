<?php
include "conexion.php";
$mesage='';
if (isset($_POST['registrar'])) {
	$nombre=$_POST['nombre'];
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$password=password_hash($pass, PASSWORD_DEFAULT);
	$sql= " INSERT INTO login (nombre,email,contrasena)values(:name, :user,:pass)";
	$stmt=$db->prepare($sql);
    $stmt->bindParam(":name",$nombre);
	$stmt->bindParam(":user",$user);
	$stmt->bindParam(":pass",$password);
	if ($stmt->execute()) {

		$mesage="usuario registrado con exito";
		
	} else{ 
		$mesage="fallo al registrar el usuario";
		exit();
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
	<h1>registrar</h1>
	<?php if(!empty($mesage)) :?>
	<p><?= $mesage ?></p>
	<?php endif?>
	<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
		nombre<input type="text" name="nombre"><br><br>
		user<input type="text" name="user"><br><br>
		pass<input type="password" name="pass"><br><br>
		<input type="submit" value="registrar" name="registrar">
		<a href="iniciar.php">iniciar sesion</a>
	</form>
</body>
</html>











