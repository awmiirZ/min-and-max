<?php

function countD()
{
    $array = ["amir", "mohsen", "asdash" , "bb" , "acccccc"];
    $count = count($array);
    $countedArray = [];

    for ($i = 0; $i < $count; $i++) {
        $counted = strlen($array[$i]);
        array_push($countedArray , $counted);

    }
    rsort($countedArray);
    echo "max =" . $countedArray[0];
    echo "<br>";
    echo "min =" . $countedArray[($count - 1)];
}
countD();