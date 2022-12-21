<!DOCTYPE html>
<html>
<style>
    table{
        border-collapse: collapse;
    }
    th, td{

        padding: 20px;
        border: 3px solid black ;
        border-collapse: collapse;
    }



</style>
<table>
    <caption>31</caption>
    <?php
    for($i=1;$i<=31;$i++)
    {
        if ($i%7==1) echo "<tr>";
        echo "<td>$i</td>";
        if($i%7==0) echo "</tr>";
    }
    ?>
</table>
</html>