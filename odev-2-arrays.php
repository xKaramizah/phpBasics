<?php
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

echo "<pre>";
function randomPlanets($array, $adet)
{
    $planets = array_filter($array, function($value) {
        return !empty($value);
    });
    $randomKeys = array_rand($planets, $adet);

    $planets = array_map(function($key) use ($array) {
        return $array[$key];
    }, $randomKeys);

    return $planets;
}
print_r(randomPlanets($planets, 2));
print_r(randomPlanets($planets, 3));
print_r(randomPlanets($planets, 2));
print_r(randomPlanets($planets, 4));
print_r(randomPlanets($planets, 5));

?>
