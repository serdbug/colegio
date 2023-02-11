<?php
$mysqli = new mysqli("localhost", "root", "", "colegio");
if($mysqli->connect_error) {
  exit('Could not connect');
}
?>