<?php
ob_start();
$username = $_POST["email"];
$password = $_POST["sifre"];
$kayitliEmail = 'b211210033@gmail.com';
$kayitliSifre = '123456'; 

   if(empty($username) && empty($password))
   {
    header("Location: giriş.html");
    exit;
   }    
   else
   {
      if($username== $kayitliEmail && $password == $kayitliSifre)
      {
        echo"Hoşgeldiniz &nbsp; $username &nbsp; &nbsp; &nbsp;" ; 
        echo"Anasayfaya gitmek için tıklayınız:  <a href='anasayfa.html'>Anasayfa</a> ";
      }
      else
      {
        header("Location: giriş.html");
        exit;
      }
   }

?>