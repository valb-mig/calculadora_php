<?php

  // FUNÇÃO DE LIMPEZA DE POST

  function clean($valor){
    
    trim($valor);
    htmlspecialchars($valor);
    stripslashes($valor);

    return $valor;
  }

  // FUNÇÃO DE ADIÇÃO

  function div($v1,$v2){
    $result = $v1 + $v2;

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
      $result = div($n1,$n2);
    }
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>➕</title>
</head>

<body>

<!-- MENU -->
  <div class="menu_int" align="center">
    <div class="menu" align="center">

      <div class="title">
        <h1>🧮 Calculadora</h1>
      </div>

      <br>
      <h2>➕ Adição</h2>
      <br>

      <div class="form">
        <form method="POST">
          <input name="n1" type="number" placeholder="Primeiro número"> + 
          <input name="n2" type="number" placeholder="Segundo número">
          <br>
          <br><button type="submit">Concluir</button>
        </form>
      </div>

      <br>

      <div class="rodape">
        <a href="page/div.php">proximo-> </a>
      </div>
    </div>
  </div> 
<!-- FIM MENU -->
  
  <div align="center" class="valor">
    <br>
    <span class="text"><?php echo $result; ?></span>
  </div>

</body>

</html>
