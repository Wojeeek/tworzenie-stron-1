<?php
$servername="localhost";
$username="Wojciech";
$password="123";
$database="bibliotekawb";
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn)
{
    die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: "
        . mysqli_connect_error());
}
echo '<p>Połączono z bazą danych <b>' . $database . '</b> na serwerze <b>' . $servername . '</b><br>';
echo 'Host info: ' . $conn->host_info . '<br>';
echo 'MySQLi stat: ' . mysqli_stat($conn) . '</p>';


?>