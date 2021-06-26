<?php
    $usuario=$_POST['usuario'];
    $pass=$_POST['pass'];
	if(!isset($_SESSION)){
        session_start();
    }
    require_once("conec.php");
	$result=mysqli_query($cn,"SELECT * FROM usuario WHERE correoUsuario='$usuario' AND contraUsuario='$pass'");
	while($row=mysqli_fetch_array($result)){
		$_SESSION['usuario']=$row['idUsuario'];
	}
	$ok=$result->num_rows;
	if($ok==1){
		$_SESSION['permiso']='si';
		echo"T";
	}
	else{
		$usuario=$_POST['usuario'];
		$pass=$_POST['pass'];
		

		if(!isset($_SESSION)){
			session_start();
		}
		require_once("conec.php");
		$result=mysqli_query($cn,"SELECT * FROM empresa WHERE correoEmpresa='$usuario' AND contraEmpresa='$pass'");
		while($row=mysqli_fetch_array($result)){
			$_SESSION['usuario']=$row['idEmpresa'];
		}
		$ok=$result->num_rows;
		if($ok==1){
			$_SESSION['permiso']='si';
			echo"Tr";
		}
		else{
			echo"F";
		}
	}  
?>