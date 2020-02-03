<?php
$host = "remotemysql.com:3306";
$dbname = "03uu8YOyKw"; //errores
$user = "03uu8YOyKw"; //dank
$pass = "vLYZDqbdqG"; //dank


try{
  $dbs = new PDO('mysql:host='.$host.';dbname='.$dbname.'', ''.$user.'', ''.$pass.'');
  $dbs->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


   



}catch (Exception $e){
  echo "Error!";
echo "<pre>";
  var_dump($e);
  exit;
}


