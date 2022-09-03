<?php

  // Função anti inject

  function clean($valor){
    
    trim($valor);
    htmlspecialchars($valor);
    stripslashes($valor);

    return $valor;
  }

  // Função de soma

  function sub($v1,$v2){
    $result = $v1 - $v2;

    return "= ".$result;
  }
?>



<?php

  // Verificação e atribuição de valores

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
  
<div class="title">
  <h1>🧮 Calculadora</h1>
</div>

<section class="form_sec">
<h2>➖ Subtração</h2>
  <div class="form">
    <form method="POST">
      <input name="n1" type="number" placeholder="Primeiro número"> -     
      <input name="n2" type="number" placeholder="Segundo número">
      <span class="text"><?php echo $result; ?></span>
      <br><button type="submit">Concluir</button>
    </form>
  </div>
</section>

</body>
</html>
