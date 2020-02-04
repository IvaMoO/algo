<?php
$host = "remotemysql.com:3306"; //DB version china
$dbname = ""; 
$user = ""; 
$pass = "";


try{
  $dbs = new PDO('mysql:host='.$host.';dbname='.$dbname.'', ''.$user.'', ''.$pass.'');
  $dbs->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


   



}catch (Exception $e){
  echo "Error!";
echo "<pre>";
  var_dump($e);
  exit;
}


