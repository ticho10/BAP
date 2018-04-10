<?php


$zoekwoord = $_POST['zoekwoord'];

//SANITIZEN TEGEN XSS
$zoekwoord = htmlentities($zoekwoord,ENT_QUOTES,'utf-8');

echo 'U hebt gezocht op het woord: ' . $zoekwoord . '<br>';
//Deze werkt ook
echo 'U hebt gezocht op het woord: ' . htmlentities($zoekwoord,ENT_QUOTES,'utf-8');
