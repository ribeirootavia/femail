<?php
if(isset($_POST['btnEnviar'])){
    $nome = $_POST['nome'];
    $sobre = $_POST['sobre'];
    $assunto = $_POST['assunto'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    echo "Sua mensagem foi enviada com sucesso!";
    echo "<br> Nome: $nome";
    echo "<br> Sobrenome: $sobre";
    echo "<br> Assunto: $assunto";
    echo "<br> E-mail: $email";
    echo "<br>Mensagem: $mensagem";
}
?>
<hr />
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div>
        <form action="formulario_email.php" method="post">
            <label>Nome:</label>
            <br>
            <input type="text" name=nome>
            <br>
            <br>
            <label>Sobrenome:</label>
            <br>
            <input type="text" name=sobre>
            <br>
            <br>
            <label>Assunto:</label>
            <br>
            <input type="text" name=assunto>
            <br>
            <br>
            <label for="email">E-mail:</label>
            <br>
            <input type="email" id="email" name="email">
            <br>
            <br>
            <label>Mensagem:</label>
            <br>
            <textarea class="form-control" rows="5" placeholder="Digite sua mensagem" name="mensagem"></textarea>
            <br>
            <br>

            <button name=btnEnviar>Enviar</button>
    </div>
    </form>
</body>

</html>