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

<h1>Tabela czytelnicy</h1>


<?php
$mysqliProceduralConection = mysqli_connect('localhost', 'Wojciech', 123, 'Biblioteka');
$conn = mysqli_connect('localhost', 'Wojciech', 123, 'Biblioteka');
if (!$conn) {
die('Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: '
. mysqli_connect_error());
}

$query = 'SELECT * FROM pracownicy JOIN stanowiska ON pracownicy.Id_stanowisko=stanowiska.Id_stanowisko';

$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
echo '<table>';
    echo '<tr><th>Id_pracownika</th><th>Nazwisko</th><th>Imie</th><th>Id_stanowisko</th><th>Miasto</th><th>Data_zatrudnienia</th><th>Wynagrodzenie</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr><td>' . $row['Id_pracownika'] . '</td><td>'
            . $row['Nazwisko'] . ' </td><td>' . $row['Imie'] . '</td><td> '. $row['Nazwa'] .'</td><td>'. $row['Miasto'] .'</td>
        <td>'. $row['Data_zatrudnienia'] .'</td><td>'. $row['Wynagrodzenie'] .'</td></tr>';
    }
    echo '</table>';
}
else {
echo 'brak danych';
}
?>
</div>