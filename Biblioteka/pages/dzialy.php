<h1>Tabela działy</h1>
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

$query = 'SELECT Id_dzial, Nazwa FROM dzialy';

$result = mysqli_query($conn, $query);
echo '<p>Zawiera ' . mysqli_num_rows($result) . ' wierszy</p>';
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Id_dzial</th><th>Nazwa</th><th><a class="add" href="?PAGE=dzialy_dodaj">&#10010;</a></th>' ;
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Id_dzial'] . '</td><td>'
            . $row['Nazwa'] . '</td><td>' . '</td></tr>';
    }
    echo '</table>';
} else {
    echo 'brak danych';
}
?>
</div>