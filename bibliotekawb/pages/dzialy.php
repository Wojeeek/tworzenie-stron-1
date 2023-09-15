<h1>Tabela działy</h1>
<?php
$query = 'SELECT Id_dzial, Nazwa FROM dzialy';

$result = mysqli_query($conn, $query);
echo '<p>Zawiera ' . mysqli_num_rows($result) . ' wierszy</p>';
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Id_dzial</th><th>Nazwa</th><th><a class="add" href="?PAGE=dzialy_dodaj">&#10010;</a></th>' ;
    </th>
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