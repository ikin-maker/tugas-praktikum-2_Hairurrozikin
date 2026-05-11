<!DOCTYPE html>
<html>
<body>

<h1> FOR</h1>
<hr>

<?php
// CONTOH BREAK
echo "<b>Contoh BREAK</b><br>";

for ($x = 0; $x <= 10; $x++) {

    // berhenti saat angka 6
    if ($x == 6){
        break;
    }

    echo "The number is: $x <br>";
}
?>

<hr>

<?php
// CONTOH CONTINUE
echo "<b>Contoh CONTINUE</b><br>";

for ($x = 0; $x <= 10; $x++) {

    // lewati angka 6
    if ($x == 6){
        continue;
    }

    echo "The number is: $x <br>";
}
?>

<hr>

<?php
// ALTERNATIVE SYNTAX FOR
echo "<b>Alternative Syntax FOR</b><br>";

for ($x = 0; $x <= 5; $x++):
    echo "The number is: $x <br>";
endfor;
?>

</body>
</html>