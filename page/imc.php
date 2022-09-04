<?php 

  // FUNÇÃO DE LIMPEZA DE POST

  function clean($valor){
    
    trim($valor);
    htmlspecialchars($valor);
    stripslashes($valor);

    return $valor;
  }

  // FUNÇÃO PARA CALCULO DE IMC

  function imc($peso,$altura){

    $imc = $peso / ($altura * $altura);

    if ($imc > 35) {
      return "no nível de obesidade mórbida. <br> Seu imc é {$imc}.";
    }

    if ($imc > 30) {
      return "no nível de obesidade. <br> Seu imc é {$imc}.";
    }

    if ($imc > 25) {
      return "com excesso de peso. <br> Seu imc é {$imc}.";
    }

    if ($imc >= 20) {
      return "normal. <br> Seu imc é {$imc}.";
    }

    if ($imc < 20) {
      return "abaixo do peso. <br> Seu imc é {$imc}.";
    }  
  }

?>

<?php

  // ATRIBUIÇÃO DE VALORES ÀS VARIAVEIS
  
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $peso = clean($_POST['peso']);
    $altura = clean($_POST['altura']);
    $calc_imc = imc($peso, $altura);
  }

?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculo IMC</title>
</head>
<body>

<div class="title" align="center">
  <h1>🧮 Calculadora</h1>
  <hr>
</div>

<section class="form_sec">

<div align="center">
  <h2>🏋 Imc</h2>
  <span class="text"><?php echo $calc_imc; ?></span>
</div>

<div class="form" align="center">
  <form method="POST">
    
    <br><label>Peso: </label>
    <input type="text" name="peso" placeholder="80(kg)">
    
    <label>Altura: </label>
    <input type="text" name="altura" placeholder="1.70(m).">  
    
    <br>  
    <br><button type="submit">Concluir</button>
  </form>
</div>

<br>
<hr>

<a href="sub.php"><-anterior </a>
</section>

</body>
</html>
