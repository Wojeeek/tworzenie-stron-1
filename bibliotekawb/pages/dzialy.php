<h1>Tabela działy</h1>
<?php
$query = 'SELECT Id_dzial, Nazwa FROM dzialy';

$result = mysqli_query($conn, $query);
echo '<p>Zawiera ' . mysqli_num_rows($result) . ' wierszy</p>';
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Id_dzial</th><th>Nazwa</th><th><a class="add" href="?PAGE=dzialy_dodaj">&#10010;</a></th></tr>';


    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Id_dzial'] .  '</td><td>'. $row['Nazwa'] . '</td><td>

<div id="dialog" title="INFORMACJA">
  <img style="width:35px; height: 30px;" src="https://www.flaticon.com/ru/free-icon/draft_46064" alt="" height="80" border="0" width="80">
</div>

<a href="?PAGE=edit&id_thing=' . $row['Id_dzial'] . '">Edycja</a></td>'.

            '<td>

<div id="dialog" title="INFORMACJA">
  <img style="width:35px; height: 30px;" src="https://aem.dropbox.com/cms/content/dam/dropbox/www/en-us/help/sync-icons/error.png" alt="" height="80" border="0" width="80">
</div>

<a  href= "?PAGE=usun&id_thing='   . $row['Id_dzial'].   '">usuń</a></td></th>'


            
        ;


    }
    echo '</table>';
} else {
    echo 'brak danych';
}
?>




