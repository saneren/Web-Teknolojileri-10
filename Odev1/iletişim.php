<?php
ob_start();
$username= $_POST["name"];
$email= $_POST["email"];
$password= $_POST["password"];
$description= $_POST["description"];

   if(empty($username))
   {
    header("Location: iletisim.html");
    exit;
   }
   else if(empty($email))
   {
    header("Location: iletisim.html");
    exit;
   }
   else if(empty($password))
   {
    header("Location: iletisim.html");
    exit;
   }
   else if(empty($description))
   {
    header("Location: iletisim.html");
    exit;
   }
   else
   {
    header("Location : iletisim-bilgileri.html");
    exit;
   }
?>