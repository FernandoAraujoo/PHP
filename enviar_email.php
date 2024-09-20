<?
if($_POST){
    $nome =  $_POST['nome'];
    $email =  $_POST['email'];
    echo $nome.'  '.$email;



}
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
        
    <p><label for="">Nome:</label><input type="text" name="nome"></p>
    <p><label for="">Email:</label><input type="text" name="email"></p>
    <p><label for="">Assunto:</label><input type="text" name="assunto"></p>
    <p><label for="">Mensagem:</label><textarea name="mensagem" id=" " cols="30" rows="10"></textarea></p>
    <p><input type="submit" name="enviar"></p>

    </form>
</body>
</html>
