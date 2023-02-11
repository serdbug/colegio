<?php
session_start();
if(isset($_SESSION['nombredelusuario']))
{
   //$usuarioingresado = $_SESSION['nombredelusuario'];
   //echo $usuarioingresado;
   echo 
   
   "<!DOCTYPE html>
   <html>
   <style>
   table,th,td {
     border : 1px solid black;
     border-collapse: collapse;
   }
   th,td {
     padding: 5px;
   }
   
   </style>
     <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
     <script src='script1.js'></script>
   <body>
   
   <h1>Prueba piloto 01.t</h1>
   
   <form action=''> 
   <select id ='pipa' name='customers' onchange='showCustomer(this.value)'>
   <option value=''>Curso:</option>
   <option value='1A'>1-Ajjj</option>
   <option value='1B'>1-B</option>
   <option value='1C'>1-C</option>
   </select>
   </form>
   
   <form action='' method='post'>
   <br><br><br>
   <input type='submit' value='Cerrar sesión' name='btncerrar' />
   </form>
   
   <br>
   
   <div id='txtHint'>Customer info will be listed here...</div>
   
   
   
   
   
   </body>
   </html>
   ";
}
else{
  header('location: index.html');
}

if(isset($_POST['btncerrar']))
{
session_destroy();
header('location: index.html');
}

?>