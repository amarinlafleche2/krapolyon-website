<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/partoches.php');
$songId = isset($_GET["song"]) ? $_GET["song"] : FALSE;
$instru = isset($_GET["instru"]) ? $_GET["instru"] : FALSE;
$songs = loadPartList(__ROOT__."/indispensables.csv");
$songs = array_merge($songs, loadPartList(__ROOT__."/nouveaux.csv"));

$path = getPath($songs[$songId][0], "pdf", $instru);
$name = basename($path);
// We'll be outputting a PDF
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename=' . $name);
readfile(__ROOT__ . $path);
?> 

