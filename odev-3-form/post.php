<?php
error_reporting(E_ALL);

echo '<br>';

function modThree($number): string
{
    $text = '<b>Girilen Sayı : '.$number.'</b><br>';
    if ($number % 3 == 0) { $text .= 'Girdiğiniz sayı 3`e bölünebilir.'; }
    else {
        $modZero = $number - $number % 3 + 3;
        $text.= 'Girdiğiniz sayı 3`e bölünemez. Bölünebilecek ilk sayı '.$modZero.'`dır';
    }
    return $text;
}

echo modThree($_POST["number"]);
