<?php
$conn = new mysqli('localhost', 'root', 'F9SwqGauNAS5USVA', 'pruebas');
$nombre=$_POST["nombre"];
$ctgr=$_POST["ctgr"];
$direccion=$_POST["direccion"];
$queid=$_POST["queid"];
echo $queid;
$sql="UPDATE alumnos set customerid='$nombre', city='$ctgr' , address= '$direccion' where id='$queid'";
if($conn->query($sql)===TRUE){
    echo "DATA updated";
}
?>