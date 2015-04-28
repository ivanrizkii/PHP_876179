<html>
<head>
<title>Pengolahan Data - Form Metode GET</title>
</head>
<body>
<h1>Fungsi Aritmatika</h1>
<table width="400" border="0">
<?php
$bil_1=$_GET['txtBil1'];
$bil_2=$_GET['txtBil2'];
function perkalian($bil_1, $bil_2){
global $bil_1;
global $bil_2;
$hasil = $bil_1 * $bil_2;
return $hasil;
}
function pembagian($bil_1, $bil_2){
global $bil_1;
global $bil_2;
$hasil = $bil_1 / $bil_2;
return $hasil;
}
function penambahan($bil_1, $bil_2){
global $bil_1;
global $bil_2;
$hasil = $bil_1 + $bil_2;
return $hasil;
}
function pengurangan($bil_1, $bil_2){
global $bil_1;
global $bil_2;
$hasil = $bil_1 - $bil_2;
return $hasil;
}
?>
<tr bgcolor="#CCCCCC">
<td>Bilangan1</td>
<td>:</td>
<td><?php echo $_GET['txtBil1']; ?></td>
</tr>
<tr>
<td>Bilangan2</td>
<td>:</td>
<td><?php echo $_GET['txtBil2']; ?></td>
</tr>
<tr bgcolor="#CCCCCC">
<td>Operasi</td>
<td>:</td>
<td>
<?php
if($_GET['operasi']=="kali"){
echo "Perkalian";
} else if($_GET['operasi']=="bagi"){
echo "Pembagian";
} else if($_GET['operasi']=="tambah"){
echo "Penambahan";
} else if($_GET['operasi']=="kurang"){
echo "Pengurangan";
} else {
echo " ";
}
?>
<tr>
<td>Hasil</td>
<td>:</td>
<td>
<?php
if($_GET['operasi']=="kali"){
echo perkalian($bil_1, $bil_2);
} else if($_GET['operasi']=="bagi"){
echo pembagian($bil_1, $bil_2);
} else if($_GET['operasi']=="tambah"){
echo penambahan($bil_1, $bil_2);
} else if($_GET['operasi']=="kurang"){
echo pengurangan($bil_1, $bil_2);
} else {
echo " ";
}
?>
</td>
</tr>
<tr bgcolor="#CCCCCC">
<td>Ekspresi Matematis</td>
<td>:</td>
<td>
<?php
if($_GET['operasi']=="kali"){
echo $bil_1. " * " .$bil_2. " = " .perkalian($bil_1, $bil_2);
} else if($_GET['operasi']=="bagi"){
echo $bil_1. " / " .$bil_2. " = " .pembagian($bil_1, $bil_2);
} else if($_GET['operasi']=="tambah"){
echo $bil_1. " + " .$bil_2. " = " .penambahan($bil_1, $bil_2);
} else if($_GET['operasi']=="kurang"){
echo $bil_1. " - " .$bil_2. " = " .pengurangan($bil_1, $bil_2);
} else {
echo " ";
}
?>
</td>
</tr>
</table>
</body>
</html>