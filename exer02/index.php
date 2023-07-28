<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do servidor</title>
</head>
<body>
   <h1>Data e hora do servidor</h1>
   <?php 
    date_default_timezone_set("America/Sao_Paulo");
    echo "<p>Funções date mostrando como pré processamento do PHP funciona</p>";
    echo "Função Date mostrando a data ".date("d:M:Y");; 
    echo"<p></p>";
    echo"Função Date mostrando data com o dia da semana: ".date("D:M:Y");
    echo"<p></p>";
    echo"Função Date mostrando a hora e a time zone  ".date("G:i:s T");
  ?>
</body>
</html>