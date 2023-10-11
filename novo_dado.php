<?php
include_once("conexao.php");


    if(!isset($_POST["modelo"]))
     header("location: index.php");

    $modelo = $_POST["modelo"];
    $marca = $_POST["marca"];
    $km = $_POST ["km"];
    $ano = $_POST ["ano"];
    $combustivel = $_POST ["combustivel"];
    $cambio = $_POST ["cambio"];
    $fk_aluno = $_POST ["fk_aluno"];
    
   $sql ="INSERT INTO carro(modelo,marca,km,ano,combustivel,cambio,fk_aluno) VALUES('$modelo','$marca','$km','$ano','$combustivel','$cambio','$fk_aluno')";
   // exit;
    mysqli_query ($conn,$sql);
    

    if(mysqli_error($conn)=='')
        header("location: index.php");
?>