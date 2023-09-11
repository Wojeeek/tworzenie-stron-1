<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF">
        <meta name="description" content="Nowak klasa 5D2">
        <title> strona główna </title>
</head>
<body>
    <h2 align="center">baza danych Nowak, klasa 5D2</h2> 
    <h3 align="center"> tu wstawiamy nasz kod🦍🌪</h3>
    <?php

$id_conn = mysqli_connect('localhost','root', '','baza_testowa');
$zapytanie = "SELECT emp.id,
       emp.first_name,
       emp.last_name
       FROM emp
       WHERE emp.last_name LIKE 'n%';";
       $wynik = mysqli_query($id_conn, $zapytanie);
       while ($row = mysqli_fetch_array($wynik)) {
        # code...
        printf("%d", $row['id']);
        printf("%s", $row['last_name']);
        printf("%s", $row['first_name']);
       }
    ?>
</body>
</html>
