<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=stylesheet href="tabela.css">
    <style>


        table, th, td, tr {
            border-collapse: collapse;
            border: 1px solid black;
            background-color: khaki;

        }
    </style>

</head>

<h1>Nowe dane tabeli dzialy</h1>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
} else {
    ?>
    <form action="?page=dzialy_dodaj" method="post">

    </form>
    <?php
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <table>
        <tr>
            <td>id_dzial</td>
            <td><input type="text" disabled></td>
        </tr>
        <tr>
            <td>nazwa</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="wyslij"></td>
        </tr>
    </table>
</form>
