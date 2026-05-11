<h1> DO WHILE</h1>
<hr>

<?php
// CONTOH BREAK
echo "<b>Contoh BREAK</b><br>";

$counter = 0;

do {
    
    if($counter == 4){
        break; // berhenti saat 4
    }

    echo "Hitungan ke - " . $counter . "<br>";
    $counter++;

} while($counter <= 5);
?>

<hr>

<?php
// CONTOH CONTINUE
echo "<b>Contoh CONTINUE</b><br>";

$counter = 0;

do {

    if($counter == 3){
        $counter++;
        continue; // lewati angka 3
    }

    echo "Hitungan ke - " . $counter . "<br>";
    $counter++;

} while($counter <= 5);
?>

<hr>

<?php
// ALTERNATIVE SYNTAX DO-WHILE
echo "<b>Alternative Syntax</b><br>";

$counter = 0;

do {
    echo "Hitungan ke - " . $counter . "<br>";
    $counter++;
} while($counter <= 5);
?>