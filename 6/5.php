<html>
<head>
<title>Contoh Form</title>
</head>
<body>
<h1>Fungsi Aritmatika</h1>
<table>
<form action="aritTampil.php" method="get">
<tr bgcolor="#CCCCCC">
<td>Bilangan 1</td>
<td>:</td>
<td><input type="double" name="txtBil1" width='50'></td>
</tr>
<tr>
<td>Bilangan 2</td>
<td>:</td>
<td><input type="double" name="txtBil2"></td>
</tr>
<tr bgcolor="#CCCCCC">
<td>Operasi</td>
<td>:</td>
<td>
<select name="operasi">
<option value="0">-pilih-</option>
<option value="kali">Perkalian</option>
<option value="bagi">Pembagian</option>
<option value="tambah">Penambahan</option>
<option value="kurang">Pengurangan</option>
</select>
<tr>
<td></td>
<td></td>
<td><input type="submit" value="Submit" /></td>
</tr>
</form>
</table>
</body>
</html>
