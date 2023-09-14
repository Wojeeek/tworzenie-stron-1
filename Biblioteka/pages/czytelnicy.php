<h1>Tabela czytelnicy</h1>
<?php
$servername="localhost";
$username="Wojciech";
$password="123";
$database="Biblioteka";
$mysqliProceduralConection = mysqli_connect($servername, $username, $password, $database);
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die('Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: '
        . mysqli_connect_error());
}

$query = 'SELECT Nr_czytelnika, Nazwisko, Imie, Data_ur, Ulica, Kod, Miasto, Data_zapisania, Data_skreslenia, Nr_legitymacji, Funkcja, Plec FROM czytelnicy';

$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Numer czytelnika</th><th>Nazwisko</th><th>Imie</th><th>Data urodzenia</th><th> Ulica</th><th>Kod</th><th>Miasto</th><th>Data Zapisania</th><th>Data skreslenia</th><th>Numer Legitymacji</th><th>Funkcja</th><th>Plec</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Nr_czytelnika'] . '</td><td>'
            . $row['Nazwisko'] . ' </td><td>' . $row['Imie'] . '</td><td> '. $row['Data_ur'] .'</td><td>'. $row['Ulica'] .'</td><td>'. $row['Kod'] .'</td><td>'. $row['Miasto'] .'</td>
<td>'. $row['Data_zapisania'] .'</td><td>'. $row['Data_skreslenia'] .'</td><td>'. $row['Nr_legitymacji'] .'</td><td>'. $row['Funkcja'] .'</td><td>'. $row['Plec'] .'</td></tr>';
    }
    echo '</table>';
} else {
    echo 'brak danych';
}
?>