<h1>usun :tabeli dzialy</h1>
<div class="column2">
    <?php
    $Id_dzial = $_GET['id_thing'];



    if ($_SERVER["REQUEST_METHOD"] == "POST") // Zapisz dane z formularza do bazy [INSERT]
    {

        $Nazwa = $_POST['Nazwa'];
        $query = "DELETE FROM dzialy WHERE Id_dzial = '$Id_dzial'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Poprawnie usuniety rekord";
            echo '<br><a href="?PAGE=dzialy">Powrót</a>';
        } else {
            echo "Błąd edycji";
        }

    } else {
        echo '<form action="?PAGE=edit&id_thing='.$Id_dzial.'&Nazwa='.$Nazwa.'" method="post">
            <table>
                <tr><td>Id_dzial</td><td><input type="text" name="Id_dzial" value="'.$Id_dzial.'" disabled </td></tr>
                <tr><td colspan="2"><center><button type="submit">Zapisz</button></center></td></tr>
            </table>
        </form>';}
    ?>
</div>
