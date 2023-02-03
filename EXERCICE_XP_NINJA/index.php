<?php
  function array_union($array1, $array2) {
    $result = array_merge($array1, $array2);
    return array_unique($result);
}

$array1 = array(1, 2, 3, 4, 5);
$array2 = array(2, 3, 4, 5, 6, 7, 8);

$result = array_union($array1, $array2);


echo implode(", ", $result);

?>