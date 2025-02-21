<?php

//mendefinisikan sebuah array
$list_buah = ["Pepaya", "Pisang", "Apel"];
/**
 * nilai didalam array masing" memiliki sebuah kunci yang disebut dengan index
 * 
 * index dimulai dari 0
 */

echo $list_buah[2];
echo "<br> List berisi " . count($list_buah) . "buah";

// mencetak sseluruh nilai di dalam array
echo "<ol>";
foreach ($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

//menambahkan nilai array
$list_buah[] = "Durian";
echo "<ol>";
foreach ($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// menghapus nilai array berdasarkan index
unset($list_buah[1]);
echo "<ol>";
foreach ($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

$list_buah[0] = "Manggis";
echo "<ol>";
foreach ($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";
// mencetak seluruh nilai array beserta indexnya
echo "<ul>";
foreach ($list_buah as $index => $buah) {
    echo "<li>buah dengan index $index adalah $buah</li>";
}
echo "</ul>";