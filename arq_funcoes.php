<?php
//var_dump($_POST);

$campo1 = isset($_POST['campo1']) ?  $_POST['campo1'] :  'nada';
    echo $campo1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" >  
        <!-- atalho para comentar qualquer linha ctrl+; -->
<!-- Se n informar o action ele ira enviar para a mesma pagina,no caso do mvc no action deve estar o nome do arq contoller -->
        <p><input type="text" name="campo1"></p>
        <p><input type="submit" name="enviar"></p>

    </form>
</body>
</html>
<?php
include('funcoes.php');

$q=nome_funcao(1,4);
echo $q;