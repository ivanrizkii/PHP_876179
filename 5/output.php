<html>
<head><title>Registrasi Sukses</title>
</head>
<body>
<table border=10 bordercolor=darkred bgcolor=lightgreen cellpadding=5 cellspacing=5>
<tr>
<td>
REGISTRASI BERHASIL</tr></td>
<tr>
<td>
<?php
print("Nama           = $_POST[nama]<br>");
print("Npm           = $_POST[npm]<br>");
print("Kelas          = $_POST[kelas]<br>");
print("Tanggal Lahir    = $_POST[tgl]/$_POST[bln]/$_POST[thn]<br>");
print("Nomor Telepon    = $_POST[nama]<br>");
print("Nilai DNS    = $_POST[dns]<br>");
print("Nilai DNU    = $_POST[dnu]<br>");
$ipk=($_POST['dns']+$_POST['dnu'])/2;
print("IPK        = $ipk<br>");
print("Praktikum yang diikuti <br>$_POST[p]<br>$_POST[j]<br>$_POST[d]<br>");
print("Asisten Dosen    = $_POST[dosen]");
?>
</tr>
</td>
</table>
</body>
</html>
