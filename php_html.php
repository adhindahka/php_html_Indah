<!DOCTYPE html>
<html lang="en">
<head>
    <title>Demo</title>
</head>

<body>

<?php
echo 'Kode PHP di sini';
// ...
?>

<p> Dokumen HTML </p>

<?php
echo 'Kode PHP di sini';
// ...
?>

<?php

// Deklarasi dan inisialisasi
$bil = 3;

echo $bil;

?>

<?php
$bil = 3;
<var_dump($bil);
// Output: int(3)

$var = ""
var_dump($var);
// Output: string(0) ""

$var = null;
var_dump($var);
// Output:NULL

?>

<?php

$a = 10;
$b = 5;

if (Sa > $b) {
    echo 'a lebih besar dari b';
} else {
    echo 'a TIDAK lebih besar dari b';
}

?>

<?php

$a = 5;
$b = 5;

if ($a > $b) {
    echo 'a lebih besar dari b';
} elseif ($a == $b) {
    echo 'a sama dengan b';
} else {
    echo 'a kurang dari b';
}

?>
<p>1. Tampilkan perulangan bilangan genap dari 100-> o</p>
<p>
<?php

$i = 100;
while ($i >= 0)
{
    echo "$i";
    echo "<br />";
    $i-=2;
}
?>
</p>

<p>2. Tampilkan bilangan yang mempunyai angka 8,bilangan maksimal 100! Contoh = 8,18,28dll</p>
<p>
<?php
for ($i= 8; $i <= 100; $i=$i+10)
{
    echo $i;
    echo "br />";
}
?>
</p>

</body>
</html>
