<?php

        ######### BubbleSort ########


function bubbleSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                // intercambiar $arr[$j] y $arr[$j + 1]
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

// Original list
$lista = [3, 1, 7, 2, 5, -4, 0, 9, 2, -1];

echo "Lista original: " . implode(", ", $lista) . "\n";

// Updated list
$listaOrdenada = bubbleSort($lista);

echo "Lista ordenada de forma descendente: " . implode(", ", $listaOrdenada) . "\n";

        ######### MergeSort ########

function mergeSort($arr) {
    $length = count($arr);
    if ($length <= 1) {
        return $arr;
    }

    $mid = (int)($length / 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] <= $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }
    while (count($left) > 0) {
        $result[] = array_shift($left);
    }
    while (count($right) > 0) {
        $result[] = array_shift($right);
    }
    return $result;
}

// Lista original de palabras
$listaPalabras = ["manzana", "pera", "banana", "naranja", "uva", "limón"];

echo "Lista original: " . implode(", ", $listaPalabras) . "\n";

// Lista utilizando Merge Sort
$listaOrdenada = mergeSort($listaPalabras);

echo "Lista ordenada alfabéticamente: " . implode(", ", $listaOrdenada) . "\n";


        ######### insertionSort ########

function insertionSort($arr) {
    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && strcmp($arr[$j], $key) > 0) {
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}

// Lista original de nombres
$listaNombres = ["Juan", "Ana", "Pedro", "María", "Luis", "Elena"];

echo "Lista original: " . implode(", ", $listaNombres) . "\n";

// Lista actualizada con Insertion Sort
$listaOrdenada = insertionSort($listaNombres);

echo "Lista ordenada alfabéticamente: " . implode(", ", $listaOrdenada) . "\n";


?>