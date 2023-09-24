<h1>Usuń dane tabeli działy</h1>

<?php
$Id_dzial = $_GET['id_thing'];
$Nazwa = $_GET['Nazwa'];
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    $query = "DELETE FROM dzialy WHERE `dzialy`.`Id_dzial` = '$Id_dzial'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "Poprawnie usunięto rekord";
        echo '<br><a href="?PAGE=dzialy">Pow    rót</a>';
    } else {
        echo "Błąd usuwania";
    }
} else {

    echo '<form action="?PAGE=usun&id_thing='.$Id_dzial.'" method="post">
 <p>Czy napewno chcesz usunąć ten rekord? <b>(NIE MOŻESZ TEGO ODWRÓCIĆ!)</b></p>
 <table>
                <tr><td>Id_dzial</td><td><input type="text" name="Id_dzial" value="'.$Id_dzial.'" disabled </td></tr>
                <tr><td>Nazwa</td><td><input type="text" name="Nazwa" id="Nazwa" value="'.$Nazwa.'" disabled></td></tr>
                 <tr><td colspan="2" style="text-align: center"><button type="submit">Usuń</button></td></tr>
                 </table>
    </form>';}
?>
