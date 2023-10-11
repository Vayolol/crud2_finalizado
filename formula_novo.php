

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>INSIRA - CARRO NOVO</title>
</head>
<body>

<div class="container">
    <h1>Insira um novo automovel!! </h1>

<form action="novo_dado.php" method="post">
  <div class="mb-3">
    <label for="modelo" class="form-label">Modelo</label>
    <input type="text" class="form-control" id="modelo" aria-describedby="Modelo" name="modelo">
  </div>

  <div class="mb-3">
    <label for="marca" class="form-label">Marca</label>
    <input type="text" class="form-control" id="marca" aria-describedby="Marca" name="marca">
  </div>

  <div class="mb-3">
    <label for="km" class="form-label">KM</label>
    <input type="text" class="form-control" id="km" aria-describedby="Km" name="km">
  </div>

  <div class="mb-3">
    <label for="ano" class="form-label">Ano</label>
    <input type="int" class="form-control" id="ano" aria-describedby="Ano" name="ano">
  </div>


  <div class="mb-3">
    <label for="combustivel" class="form-label">Combustivel</label>
    <select name="combustivel" id="combustivel" class="form-select">

        <option value = "etanol">Etanol</option>
        <option value = "gasolina">Gasolina</option>
        <option value = "diesel">Diesel</option>
    </select>
  </div>  

  <div class="mb-3">
    <label for="cambio" class="form-label">Cambio</label>
    <select name="cambio" id="cambio" class="form-select">

        <option value = "auto">Auto</option>
        <option value = "manu">Manu</option>
    </select>
  </div>  
    
  <div class="mb-3">
    <label for="fk_aluno" class="form-label">Fk_Aluno</label>
    <select name="fk_aluno" id="fk_aluno" class="form-select">

        <option value = "1">1</option>
        <option value = "2">2</option>
    </select>
  </div>  

  
  <button type="submit" class="btn btn-primary">ENVIAR</button>
</form>

 

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>