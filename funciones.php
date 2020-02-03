<?php
   
class funciones{


 public function cargarProblemas(){
    include "dbs.php";
 
 
 try{
     $queryd = " SELECT * FROM `problemas`";
 
     $ex = $dbs->query($queryd);
 
     
       
 while($res = $ex->fetch(PDO::FETCH_ASSOC)){

if($res['Titulo'] != NULL || $res['Descripcion'] != NULL ){
    

    echo '<button class="desplegable">'.$res['Titulo'].' (#'.$res['id'].')</button>';
    echo '<div class="contenido">';
    echo '<p>'.$res['Descripcion'].'</p>';
    echo '<hr>';
    echo '<p><i>Añadido Por: '.$res['Autor'].'</i></p>';
    echo "</div>";
}
 }
}catch (Exception $ex){
    echo "Excepcion";
    echo $ex;
  }
}
}
//CREATE TABLE `errores`.`problemas` ( `id` int NOT NULL AUTO_INCREMENT, `Titulo` INT NOT NULL , `Descripcion` INT NOT NULL , `Autor` INT NOT NULL,  PRIMARY KEY (id) ) ENGINE = InnoDB;