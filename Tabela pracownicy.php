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
<body>

<?php
$conn = mysqli_connect("localhost", "Wojciech", "123", "Biblioteka");
if(!$conn){
    die("Błąd: ".mysqli_connect_error());
}


echo "<table class='tabelka'>";
$sql = "SELECT * FROM czytelnicy";
$result = mysqli_query($conn, $sql);
echo "<tr>";
echo "<th>Nr_pracownika</th><th>Nazwisko</th><th>Imie</th><th>Data_ur</th><th>Ulica</th><th>Kod</th><th>Miasto</th><th>Data_zapisania</th><th>Data_skreslenia</th><th>Nr_legitymacji</th><th>Funkcja</th><th>Plec</th>";
echo "</tr>";
while ($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>".$row['Nr_czytelnika']."</td><td>".$row['Nazwisko']."</td><td>".$row['Imie']."</td><td>".$row['Data_ur']."</td><td>".$row['Ulica']."</td><td>".$row['Kod']."</td>"."<td>".$row['Miasto']."</td>"."<td>".$row['Data_zapisania']."</td>"."<td>".$row['Data_skreslenia']."</td>"."<td>".$row['Nr_legitymacji']."</td>"."<td>".$row['Funkcja']."</td>"."<td>".$row['Plec']."</td>"."</tr>";
}
echo "</table>";
#tabelka end
?>
</body>
</html>


<?php
$mysqliProceduralConection = mysqli_connect('localhost', 'Wojciech', 123, 'Biblioteka');

if (!$mysqliProceduralConection)
{
    die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: "
        . mysqli_connect_error());
}
echo '<p>Połączono z bazą danych <b>' . '</b> na serwerze <b>'  . '</b><br>';
echo 'Host info: ' . $mysqliProceduralConection->host_info . '<br>';
echo 'MySQLi stat: ' . mysqli_stat($mysqliProceduralConection) . '</p>';
$sql = "SELECT * FROM `pracownicy`;";
mysqli_close($mysqliProceduralConection);

?>