<?php

  // FUNÇÃO DE LIMPEZA DE POST

  function clean($valor){
    
    trim($valor);
    htmlspecialchars($valor);
    stripslashes($valor);

    return $valor;
  }

  // FUNÇÃO DE SUBTRAÇÃO

  function sub($v1,$v2){
    $result = $v1 - $v2;
    return $result;
  }
?>

<?php

  // ATRIBUIÇÃO DE VALORES ÀS VARIAVEIS

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $n1 = clean($_POST['n1']);
    $n2 = clean($_POST['n2']);

    if((empty($n1)) && (empty($n2))){
      $result = "Nenhum numero a ser calculado!!!"; 
    } else {
      $result = sub($n1,$n2);
    }
  }
?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>➖</title>
</head>
<body>
  
<div class="title" align="center">
  <h1>🧮 Calculadora</h1>
  <hr>
</div>

<section class="form_sec">

<div align="center">
  <h2>➖ Subtração</h2>
  <span class="text"><?php echo $result; ?></span>
</div>

<br>

<div class="form" align="center">
    <form method="POST">
      <input name="n1" type="number" placeholder="Primeiro número"> -     
      <input name="n2" type="number" placeholder="Segundo número">
      <br>
      <br><button type="submit">Concluir</button>
    </form>
</div>

<br>
<hr>

<a href="div.php"><-anterior </a>  |  <a href="imc.php"> proximo-></a>
</section>

</body>
</html>
