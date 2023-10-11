<?php
  include_once("conexao.php");

if(!isset($_GET["id"])) 

    header("location: index.php");

if($_GET["id"]=="") 

    header("location: index.php"); 


    $id = $_GET["id"];

    $sql = "SELECT modelo,marca,km,ano,combustivel,cambio,pk_carro From carro WHERE pk_carro=".$id;
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);

 


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>CRUD - UPDATE</title>
</head>
<body>

<div class="container">
    <h1>Informe o dados a serem atualizados </h1>

<form action="alterar_dado.php" method="post">
  <div class="mb-3">
    <label for="modelo" class="form-label">Modelo</label>
    <input type="text" class="form-control" id="modelo" aria-describedby="Modelo" name="modelo" value="<?php echo $row["modelo"]; ?>">
    <input type="hidden" name="id" value="<?php echo $row["pk_carro"] ?>">
  </div>

  <div class="mb-3">
    <label for="marca" class="form-label">Marca</label>
    <input type="text" class="form-control" id="marca" aria-descridebly="Marca" name="marca" value="<?php echo $row["marca"];?>">
  </div>

<div class="mb-3">
    <label for="km" class="form-label">KM</label>
    <input type="text" class="form-control" id="km" aria-descridebly="km" name="km" value="<?php echo $row["km"];?>">
</div>

<div class="mb-3">
    <label for="ano" class="form-label">Ano</label>
    <input type="int" class="form-control" id="ano" aria-descridebly="ano" name="ano" value="<?php echo $row["ano"];?>">
</div>

  <div class="mb-3">
    <label for="combustivel" class="form-label">Combustivel</label>
    <select name="combustivel" id="combustivel" class="form-select">

        <option value = "etanol" <?php echo $row["combustivel"]=="etanol" ? "selected" :  "";  ?> >Etanol</option>
        <option value = "gasolina" <?php echo $row["combustivel"]=="" ? "selected" :  "";  ?>>Gasolina</option>
        <option value = "diesel" <?php echo $row["combustivel"]=="T" ? "selected" :  "";  ?>>Diesel</option>
    </select>
  </div>


<div class="mb-3">
    <label for="cambio" class="form-label">Cambio</label>
    <select name="cambio" id="cambio" class="form-select">

        <option value = "auto" <?php echo $row["cambio"]=="auto" ? "selected" :  "";  ?> >Auto</option>
        <option value = "manu" <?php echo $row["cambio"]=="" ? "selected" :  "";  ?>>Manu</option>
    </select>
  </div>
  
  <button type="submit" class="btn btn-primary">ENVIAR</button>
</form>

 

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>