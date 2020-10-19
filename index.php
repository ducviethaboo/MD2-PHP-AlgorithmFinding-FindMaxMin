<?php
function findMax($arr)
{
    $max = $arr[0];
    foreach ($arr as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }
    return $max;
}


$array = [];
for ($i = 0; $i < 100; $i++) {
    $array[$i] = rand(1, 101);
    echo $array[$i] . ' ';
}


$maxvalue = findMax($array);
echo '<br>' . 'Max value is :' . $maxvalue;