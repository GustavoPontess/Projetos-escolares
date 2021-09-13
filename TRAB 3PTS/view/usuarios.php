<?php header("Content-type: text/html; charset=utf8"); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Jogadores cadastrados no campeonato</h2>
  <p>JOGADORES!</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Número da camisa</th>
        <th>Time</th>
        <th>Posição </th>
        <th>Nome</th>
      </tr>
    </thead>
    <tbody>

    <?php foreach($usuarios as $informacoes){ ?> 
    
      <tr>
        <td><?=$informacoes->numero_camisa?></td>
        <td><?=$informacoes->clube?></td>
        <td><?=$informacoes->posicao?></td>
        <td><?=$informacoes->nome?></td>
      </tr>
    
    <?php } ?>
      
    </tbody>
  </table>
</div>

</body>
</html>