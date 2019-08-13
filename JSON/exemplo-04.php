<?php

//passando do JSON para o php
$json = '[{"nome":"marcos"},{"nome":"picles"}]';

$conversao = json_decode($json, true); //o true serve para que os elementos do array sejam todos array, caso haja objetos

var_dump($conversao);

?>