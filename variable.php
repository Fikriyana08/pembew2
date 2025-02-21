<?php

$nama_depan = "fikri";
$nama_belakang = "yana";
$umur = 20;
$tb = 150.9; 

echo $nama_depan . "  " . $nama_belakang;
echo "<br>nama saya adalah $nama_depan dana saya berumur $umur";

echo "<br /><br />";

//variable system 
echo 'documen robot' . $_SERVER ["DOCUMENT_ROOT"];

//variable constant
define('PHI', 3.14);

$r = 8;
$luas = PHI * $r * $r ;

echo "lingkaran dengan jari-jari {$r}cm memiliki luasa ($luas)cm2";

