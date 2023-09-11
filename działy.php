<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=stylesheet href="tabela.css">
    <style>
        head

        table, th, td, tr {
            border-collapse: collapse;
            border: 1px solid black;
            background-color: khaki;

        }
    </style>

</head>

<h1>Tabela działy</h1>



<?php
$mysqliProceduralConection = mysqli_connect('localhost', 'Wojciech', 123, 'Biblioteka');
$conn = mysqli_connect('localhost', 'Wojciech', 123, 'Biblioteka');
if (!$conn) {
    die('Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: '
        . mysqli_connect_error());
}

$query = 'SELECT * FROM dzialy ';

$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Id_pracownika</th><th>Nazwa</th> <td &#10010;</a>
<a class="add" href="?page=dzialy_dodaj">&#10010;</a> ';
    while ($row = mysqli_fetch_assoc($result)) {

        echo '<tr><td>' . $row['Id_dzial'] . '</td><td>'
            . $row['Nazwa'] . ' </td><td>' ;

    }
    echo '</table>';
}
else {
    echo 'brak danych';
}
?>
