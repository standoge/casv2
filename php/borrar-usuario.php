<?php 
include("sesion.php");
$usuario = $_POST["usuario_slc"];
$password = $_POST["password_txt"];
$usuario_actual = $_SESSION["usuario"];
include("conexion.php");

if($usuario_actual==$usuario){
	$error = "actual";
	header("Location: eliminar-usuario.php?error=$error");
} else {
	$consulta = "SELECT password FROM usuario WHERE password = SHA1('$password') AND usuario = '$usuario_actual'";
	$ejecutar_consulta = $conexion->query($consulta);
	$num_regs = $ejecutar_consulta->num_rows;
	if($num_regs==0){
		$error="bad-pw";
		header("Location: eliminar-usuario.php?error=$error");
	}
	else {
		$consulta = "DELETE FROM usuario WHERE usuario='$usuario'";
		$ejecutar_consulta = $conexion->query($consulta);
		if ($ejecutar_consulta) {
			$error = "no";
			$user = $usuario;
			header("Location: eliminar-usuario.php?error=$error&user=$user");
		} else {
			$error = "si";
			header("Location: eliminar-usuario.php?error=$error");
		}
	}
}

$conexion->close();

?>