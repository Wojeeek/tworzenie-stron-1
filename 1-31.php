<!DOCTYPE html>
<html>
<style>
    table{
        border-collapse: collapse;
    }
    th, td{

        padding: 20px;
        border: 2px solid black ;
        border-collapse: collapse;
    }

    td:nth-child(even), th:nth-child(even){
        background-color: cyan;
    }



</style>


    <?php
    $tydzien=array('pon','wto','sro','czw','pia','sob','nie');
    foreach ($tydzien as $tydzie);
    ?>
    <table>
        <tr>

            <?php
            foreach ($tydzien as $tydzien) {
                echo '<td>' . $tydzien . '</td>';
            }
            ?>

        </tr>
    </table>
</html>

