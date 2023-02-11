<?php

$mysqli = new mysqli("localhost", "root", "", "pruebas");
if($mysqli->connect_error) {
  exit('Could not connect');
}

?>