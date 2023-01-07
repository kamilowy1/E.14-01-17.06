<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Komis samochodowy</title>
    <link rel="stylesheet" href="auto.css">
</head>
<body>
    <div id="baner">
     <h1>Samochody</h1>
    </div>

       <div id="lewy">
        <h2>Wykaz samochodów</h2>
        <ul>
<?php
//utworzenie zmiennych polaczeniowych
$server = 'localhost';
$user = 'root';
$passwd = '';
$dbname = 'komis';

$conn = mysqli_connect($server,$user,$passwd,$dbname);

//sprawdzenie polaczenia

/*
if(!$conn){
    die ("fatal error".mysqli_error($conn));
} echo "jest okej";
*/

$zapytanie = "SELECT `id`, `marka`, `model` FROM `samochody`;";
$sql = mysqli_query($conn,$zapytanie); 
while($wynik = mysqli_fetch_row($sql)){
    echo "<li>" .$wynik[0]. " ". $wynik[1]. " ". $wynik[2]. "</li>". "<br />"; 
}

?>
        </ul>

        <h2>Zamówienia</h2>
        <ul>
<?php

$zapytanie2 = "SELECT `Samochody_id`, `Klient` FROM `zamowienia`;";
$sql2 = mysqli_query($conn,$zapytanie2);

while($wynik2 = mysqli_fetch_row($sql2)){
    echo "<li>" .$wynik2[0]. " ". $wynik2[1]. "</li>";
}

?>
</ul>
       </div>

        <div id="prawy">
         <h2>Pełne dane: Fiat</h2>
<?php

$zapytanie3 = "SELECT `id`, `marka`, `model`, `rocznik`, `kolor`, `stan` FROM `samochody` WHERE `marka`='Fiat';";
$sql3 = mysqli_query($conn,$zapytanie3);

while($wynik3 = mysqli_fetch_row($sql3)){
    echo $wynik3[0]. " / ". $wynik3[1]. " / ". $wynik3[2]. " / ". $wynik3[3]. " / ". $wynik3[4]. " / ". $wynik3[5]. " / ". "<br />";
}

mysqli_close($conn);

?>
        </div>

          <div id="stopka">
           <table>
            <tr>
                <td><a href="kwerendy.txt">Kwerendy</a></td>
                <td>Autor:000000000</td>
                <td><img src="auto.png" alt="komis samochodowy"></td>
            </tr>
           </table>
           </div>
</body>
</html>