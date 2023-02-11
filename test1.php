<?php
session_start();
if(isset($_SESSION['nombredelusuario']))
{
	header('location: acceso.php');
}

if(isset($_POST['btningresar'])){
    

    $dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="colegio";
	
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if(!$conn)
	{
		die("No hay conexión: ".mysqli_connect_error());
	}

    $nombre=$_POST['txtusuario'];
    $pass=$_POST['txtpasword'];

$query=mysqli_query($conn,"Select * from usuarios where usuario = '".$nombre."' and contra = '".$pass."'");
$nr=mysqli_num_rows($query);

if(!isset($_SESSION['nombredelusuario']))
	{
	if($nr == 1)
	{
		$_SESSION['nombredelusuario']=$nombre;
		header("location: acceso.php");
        
	}
	else if ($nr == 0)
	{
		echo "<script>alert('Usuario no existe');window.location= 'index.html' </script>";
	}
	}

}

?>







