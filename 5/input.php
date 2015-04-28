<html>
<head><title>PHP NIH YE</title>
</head>
<body>
<table border=10 bordercolor=darkred bgcolor=lightgreen cellpadding=5 cellspacing=5><tr><td colspan=3>
<center>SELAMAT DATANG<br>
SILAHKAN ISI REGISTRASI TERDAHULU</center></td></tr>
<form action="output.php" method="POST">
<tr>
<td>
Nama</td><td>:</td><td><input type=text name=nama size=20 maxlength=30>
</tr></td>
<tr><td>
Npm</td><td>:</td><td><input type=text name=npm size=20 maxlength=8></tr></td>
<tr><td>
Kelas</td><td>:</td><td><input type=text name=kelas size=20 maxlength=3><br></tr></td>

<tr><td>
Tanggal Lahir</td><td>:</td><td>
<select name=tgl>
<?php
for($h=1;$h<31;$h++)
{
echo "<option>--</option>";
echo "<option>$h</option>";
}
?>
</select>
<select name=bln>
<?php
for($h=1;$h<12;$h++)
{
echo "<option>--</option>";
echo "<option>$h</option>";
}
?>
</select>
<select name=thn>
<?php
for($h=1950;$h<2013;$h++)
{
echo "<option>----</option>";
echo "<option>$h</option>";
}
?>
</select>
</tr></td>
<tr><td>
Nomor Telpon</td><td>:</td><td><input type=text name=tlp size=20 maxlength=15></tr></td>
<tr><td>
Nilai DNS</td><td>:</td><td><input type=text name=dns size=4 maxlength=4></tr></td>
<tr><td>
Nilai DNU</td><td>:</td><td><input type=text name=dnu size=4 maxlength=4></tr></td>
<tr><td colspan=3>
Praktikum yang diambil<br>
PHP<input type=checkbox name=p value=PHP>
JAVA<input type=checkbox name=j value=JAVA>
DELPHI<input type=checkbox name=d value=DELPHI><br>
Asisten dosen
<select name=dosen>
<?php
$a="Dermawan";
$b="Ridho";
echo "<option>----</option>";
echo "<option>$a</option>";
echo "<option>$b</option>";
?>
</select>
</tr></td>
<tr><td colspan=3>
<b><CENTER>ISI DATA DENGAN BENAR</CENTER></B> 
</tr></td>
<br><br>
<TR><TD COLSPAN=3><CENTER>
<input type=submit name=ok value=INPUT>
<input type=reset name=reset value=RESET>
</CENTER>
</tr>
</td>
</form>
</table>
</body>
</html>