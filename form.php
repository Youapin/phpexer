<?php
require_once 'user.php';

>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Post</title>
</head>
<body>
    <h1>Novo Post</h1>
    <form action="view.php" method="post">
        <input type="hidden" name="cred" value="x">
        Título: <input type="text" name="title"><br>
        Conteúdo:<br><textarea name="content" rows="5" cols="33"></textarea><br>
        Autor: <input type="text" name="author" id=""><br><br>
        <input type="submit">
    </form>
</body>
</html>
