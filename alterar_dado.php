<?php
include_once("conexao.php");


    if(!isset($_POST["id"]))
     header("location: index.php");

    $id = $_POST['id']; 
    $modelo = $_POST["modelo"];
    $marca = $_POST["marca"];
    $km = $_POST ["km"];
    $ano = $_POST ["ano"];
    $combustivel = $_POST ["combustivel"];
    $cambio = $_POST ["cambio"];
    
    $sql ="UPDATE carro SET modelo='$modelo', marca='$marca', km='$km', ano='$ano', combustivel='$combustivel', cambio='$cambio' WHERE pk_carro = $id  ";

   

    mysqli_query ($conn,$sql);

    if(mysqli_error($conn)=='')
        header("location: index.php");
?>