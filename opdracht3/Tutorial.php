<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="navbar/navbar.css" rel="stylesheet">
</head>
<body>
<?php
include('navbar.html');
?>
</body>
</html>
<!-- require include difine-->
<?php

require('../../../../../connectvars.php');

//Security prepared statements
//OWASP
//SQL INJECTION

//mysqli object aanmaken + nieuwe connectie manier
$mysqli = new mysqli(HOST,USER,PASS,DBNAME);
//Testen op connectie errors
if ($mysqli->connect_errno){
    die('Error code' . $mysqli->connect_errno . '.'); //Die kan ook met exit
}

//Query schrijven
$query = "INSERT INTO nieuwsbrief VALUES (0,?,?,?,?)";
//$result = $mysqli->query($query);

//Preparen
$stmt = $mysqli->prepare($query);

//binden
$stmt->bind_param('ssss', $voornaam, $tsv,$achternaam,$mailadres);

//invullen
$voornaam = 'kip';
$tsv = '';
$achternaam = 'KROKET';
$mailadres = 'kip@kroket.nl';

//Uitvoeren/executeren
$stmt->execute();


