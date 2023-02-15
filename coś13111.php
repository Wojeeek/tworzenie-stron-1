<!DOCTYPE html>
<html>
<head>
    <style>

        table {
            border-collapse: collapse;
            width: 40%;
        }

        td, th {
            border: 4px solid #dddddd;
            text-align: left;
        }


    </style>
</head>

<body>
<table>
    <hr>


        <td>

            <form action="">
                <fieldset>
<legend>Rocznik</legend>
                <?php

                for ($i=2010; $i<=2025; $i++) {

                    echo "<input type='radio' name='button' id='button$i'><label for='button$i'> $i </label>" . "<br>";
                }

                ?>
                </fieldset>
            </form></td>
    </hr>
</table>
</body>
</html>


</html>
