<?php 

$from = "suporte@luan-farias.000webhostapp.com";

$to = $_POST['email'];

$subject = "O correio do PHP funciona bem";

$message = "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Email da Wert</title>
</head>
<body>
    <p>Olá, gostaria de dizer a cerca dos seus pedidos recentes. As informações que nós recebemos de você foram</p>

    <table>
        <tr>
            <td>Nome</td>
            <td>" . $_POST['name'] . "</td>
        </tr>
        <tr>
            <td>Nome</td>
            <td>" . $_POST['email'] ."</td>
        </tr>
    </table>
</body>
</html>";

$headers = "De:". $from;
