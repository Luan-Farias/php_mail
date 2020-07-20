<?php 

$from = "suporte@luan-farias.000webhostapp.com";

$to = $_POST['email'];

$subject = "O correio do PHP funciona bem";

// Calcula data de entrega
$date = new DateTime();
$deliveryDay = date_add($date, date_interval_create_from_date_string('2 days'));

$weekday = date('w');
if ($weekday == 5 || $weekday == 6) {
    $deliveryDay = date_add($date, date_interval_create_from_date_string('4 days'));
}

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

    <p>Esperamos entregar o seu produto no dia" . $deliveryDay->format('d/m/Y') ."</p>
</body>
</html>";

$headers = "De:". $from;