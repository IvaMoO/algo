<?php

$titulo = $_POST['Titulo'];
$desc = $_POST['Desc'];
$autor = $_POST['Autor'];



include('dbs.php');

$insert = $dbs->prepare("INSERT INTO `problemas` ( `id`, `Titulo`, `Descripcion`, `Autor`)
VALUES (NULL, :titulo, :desc, :autor)");

$insert->bindParam(':titulo', $titulo);
$insert->bindParam(':desc', $desc);
$insert->bindParam(':autor', $autor);


$insert->execute();


header("Location: index.php");