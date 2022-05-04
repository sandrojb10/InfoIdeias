<?php


$ano = $_GET['ano'];

if ($ano < 1) {
    return "Ano inválido";
} else if ($ano == 1) {
    return "Século I";
}
$calc = (($ano - 2) / 100) + 1;

$seculo = explode(".", $calc);

echo  "Ano " . $ano . " - Século " . $seculo[0];