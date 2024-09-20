<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manipulação de Strings</title>
</head>
<body>
    <form action="" method="post" >  
    <p><textarea name="mensagem" id="" cols="30" rows="10"><?php echo $_POST['mensagem'];?></textarea></p>
    <p><input type="submit" name="enviar"></p>

    </form>
    <?php
    if(isset($_POST['enviar'])){
        //echo $mensagem = addslashes($_POST['mensagem']); //adiciona barra invertida em aspas e apostofres
        echo $mensagem = stripslashes($_POST['mensagem']); //retira a barra invertida em aspas e apostofres
        var_dump(explode(' ',$_POST['mensagem'],3 /*,define qunatas partes limite do aray. 
    o ultimo array fica com o restante do texto*/ ));

    }
    ?>
</body>
</html>
