<?php 

include ("conexion.php");

if (isset($_POST['register']) ) {
    if(
        strlen($_post['name']) >= 1 &&
        strlen($_post['email']) >= 1 &&
        strlen($_post['direction']) >= 1 &&
        strlen($_post['phone']) >= 1 &&
        strlen($_post['password']) >= 1 
     ) {
          $name = trim($_POST['name']);
          $email = trim($_POST['email']);
          $direction = trim($_POST['direction']);
          $phone = trim($_POST['phone']);
          $password = trim($_POST['password']);
          $fecha = date("d/m/y");
          
          $consulta = "INSERT INTO datos (nombre, Email, Direccion, Telefono, Clave, Fecha)
          VALUES ('$name', '$email', '$direction', '$phone', '$password', '$fecha')";
          $resultado = mysqli_query($conex, $consulta);
          if ($resultado) {
           ?>
               <h3 class="success"> Tu registro se ha completado</h3>
           <?php
           } else {
            ?>
               <h3 class="error">  Ocourrio un error</h3>
            <?php
           } 
         } else {
            ?>
            <h3 class="error"> llena todos los campos</h3>
          <?php
        } 
         
    }
     
    
   






