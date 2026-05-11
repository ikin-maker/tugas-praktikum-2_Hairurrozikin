<h1>WHILE</h1>
<hr>

<?php  
// BELAJAR WHILE + BREAK
echo "<b>Contoh BREAK</b><br>";

$hitung = 1;

while ($hitung <= 10){

    // menghentikan loop saat angka 6
    if ($hitung == 6){
        break;
    }

    echo "Angka - " . $hitung;
    echo "<br>";

    $hitung++;
}
?>

<hr>

<?php
// BELAJAR CONTINUE
echo "<b>Contoh CONTINUE</b><br>";

$hitung = 1;

while ($hitung <= 10){

    // melewati angka 6
    if ($hitung == 6){
        $hitung++;
        continue;
    }

    echo "Angka - " . $hitung;
    echo "<br>";

    $hitung++;
}
?>

<hr>

<?php
// ALTERNATIVE SYNTAX WHILE
echo "<b>Alternative Syntax WHILE</b><br>";

$hitung = 1;

while ($hitung <= 5):
    echo "Angka - " . $hitung;
    echo "<br>";
    $hitung++;
endwhile;
?>