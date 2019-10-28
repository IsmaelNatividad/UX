<?php
include "robust/html/index.html";

   $user = $_GET['user'];

   $password = $_GET['password'];

 

   if (($user == "usuario") AND ($password == "admin")) {

            header ('location /html/ltr/index1.html');

   }  if (($user == "admin") AND ($password == "admin")) {

    

    header ('location /html/ltr/index2.html');

 } 
   else {

    echo "¡Usuario o contraseña incorrectos!";


   }
   
   
  
  

?>
