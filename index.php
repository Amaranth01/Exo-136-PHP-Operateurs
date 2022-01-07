<?php

// Premiere ligne
echo 10 * 5 ."<br>";

//Deuxieme ligne
echo 10 / 2;

//Troisieme ligne
$a = 2;
$b = 2;
if($a === $b) {
    echo "<br><br>a est identique à b";
}

//Quatrieme ligne
$a = 2;
$b = 3;
if($a !== $b) {
    echo"<br><br>a n'est pas identique à b";
}


//Cinquieme ligne
$arr1 = ["machin", "truc"];
$arr2 = ["truc", "machin"];
if($arr1 = $arr2) {
    echo "<br><br>les tableaux ont le même contenu";
}