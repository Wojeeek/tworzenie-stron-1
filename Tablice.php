<!DOCTYPE html>
<html lang="pl">
<body>
<pre>
<?php

$owoce= array_fill(8, 5, 'mango');
print_r($owoce);

?>
    </pre>
<pre>
    <?php
    $parzyste= range(0,12,2);
    $dziesiatki= range(-10,100,10);
    $polowki= range(-5.5,5.5,0.5);
    $litery_od_em= range("m","u",);
    $litery_wstecz=range("x","e");



    print_r($parzyste);
    print_r($dziesiatki);
    print_r($polowki);
    print_r($litery_od_em);
    print_r($litery_wstecz);
    ?>
</pre>

<pre>
<?php
$N1=("tworzenie");
$N2=("stron");
$N3=("aplikacji");
$N4=("internetowych");

$przedmiot= ["tworzenie","stron","aplikacji","internetowych"];

list($N1, $N2, $N3, $N4) = $przedmiot;
echo "$N1 $N2 $N3 $N4"
?>
    </pre>


<hr>


<table style= "width: 100%; border-collapse: collapse">
    <tr>
        <?php

        $liczby= range(0,10);
        shuffle($liczby);
        foreach ($liczby as $liczba){
            echo  "<td style='background-color: aliceblue; border: 1px solid dodgerblue; padding: 10px;text-align: center;'> $liczba</td>";
        }
        ?>
    </tr>
</table>


<pre>
<?php
$numbers= array(rand(0, 99), rand(0, 99), rand(0, 99), rand(0, 99), rand(0, 99));
rsort($numbers);
foreach ($numbers as $num ) {
    echo "$num\n";
}
?>
<hr>
<?php
$tabliczka = array("Skazani na shawshank" => "dramat" , "Nietykalni" => "biograficzny", władca pierśćieni: powrót króla => fantasy
,Pulp fiction => gangsterski, Siedem => kryminał, Podziemny krąg => thriller, Django => western ,
Król lew => animacji , Avengers: Wojna bez granic => akcja,Dobry . zły i brzydki =>western,

);
print_r($tabliczka);
foreach=($tabliczka as $tabliczk => $film_value) {
    echo "$tabliczka $tabliczk";
}
?>

</pre>
</body>
</html>