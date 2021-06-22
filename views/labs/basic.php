<?php

$search = 'Perl';
$array = array('JS', 'HTML', 'CSS', 'Perl', 'PHP');
echo findIndexByValue($array, $search);

function findIndexByValue ($array, $search)
{
    $result = null;

    foreach ($array as $key => $item) {
        if ($item == $search) {
            $result = $key;
        }
    }
    if ($result) {
        return $search . ' знаходиться в масиві під індексом: ' . $result;
    } else {
        return $search . ' не знайдено в масиві';
    }
}
?>
