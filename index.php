<?php

include "dbs.php";
include "funciones.php";
include "vars.php";

$a = new funciones();



?>


<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
html{
    font-family: 'Raleway', sans-serif;
}
.desplegable {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.desplegar, .desplegable:hover {
  background-color: rgba(0, 0, 0, 0.1);
  color: grey;


}

.contenido {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}
</style>


</head>


<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand" href="#"> <i class="fa fa-home"></i>
  </a>

  
    <ul class="navbar-nav">
      <li class="nav-item active">

<button type="button" class="btn btn-outline-primary disabled">Iniciar Sesion</button>
<button type="button" class="btn btn-outline-success disabled">Registrarse</button>
<button type="button" class="btn btn-outline-danger disabled">Panel de Control</button>
</li>
    </ul>
  </div>
</nav>
<?php

//echo $nav;


$a->cargarProblemas();
?>
<bottom>

<button class="desplegable">Añadir nuevo</button>
<div class="contenido">

<div class="form-group" style="width:65%; margin:auto;  box-shadow: 0.1px 0.2px;">
<form name=mandarF action="aError.php" method="post">
Tu nombre:
<input type="text" class="form-control" value="" placeholder="Manuel Kant" name="Autor">

<br>


Breve descripcion del problema 
<input type="text"class="form-control" value="" placeholder="Configuration File was not Found!" name="Titulo"><br>




Solución del problema:
<input type="textarea"class="form-control" value="" placeholder="Hay que verificar la integridad de los archivos del juego de ArmA (desde Steam)" name="Desc">


<br>
<button type="submit" class="form-control"  value="Submit"> Mandar </button>

</div> 




</form> 
</div>


</bottom>
<script>
var coll = document.getElementsByClassName("desplegable");
var v;

for (v = 0; v < coll.length; v++) {
  coll[v].addEventListener("click", function() {
    this.classList.toggle("desplegar");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

