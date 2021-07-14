<?php
//echo "cem";


$a = 110;
$b = "110";
// var_dump($a == $b);
//echo $a==$b;

function esitlikKontrol($ilkSayi, $ikinciSayi) {
    return $ilkSayi == $ikinciSayi;
}

// var_dump(esitlikKontrol(10, 20));


$yil = 2021;
$dogumYil = 2003;
$yas = $yil - $dogumYil;
// echo $yas;die;


function cikar($yil, $dogumYil) {
   return $yil - $dogumYil;
}

// echo cikar(2021, 2003);

function ort(array $numbers) {
    $sum = array_sum($numbers);//sum değerlerin toplamını hesaplar
    $count = count($numbers);//count eleman sayısını döndürür
    return $sum / $count;
}

$a = [50,100,80,4];
// echo ort($a);

function name($firstName, $surName) {
    //echo $firstName . ' ' . $surName;
    // echo "{$firstName} {$surName}";
    echo ucfirst(strtolower($firstName)) . ' ' . ucfirst(strtolower($surName));
}

name("cEm", "balbay");

?>