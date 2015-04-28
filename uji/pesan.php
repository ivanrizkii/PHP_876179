<html>
<head>
<title>Pemesanan Tempat</title>
</head>
<body>
<font size="7"face="Impact" color="red"><center>Pemesanan Tempat</font></center>
<center><table border="3" width="500px" height="100px">
<tr><td bgcolor="red">
<font color="gold" size="5">
<form action="" name="pemesanan" method="post">
<center><table>
	<tr>
	<td><font color="gold"face="Berlin Sans FB Demi"size="3">Nama Pemesan</td><td>:</td><td><input type="text" name="nama"></td></font>
	</tr>
	<tr>
	<td><font color="gold"face="Berlin Sans FB Demi"size="3">Nomor Ponsel</td><td>:</td><td><input type="text" name="ponsel"></td>
	</tr>
	<tr>
	<td><font color="gold"face="Berlin Sans FB Demi"size="3">Keperluan</td><td>:</td><td><select name="Gedung">
				 <option value="Futsal">Futsal</option>
				 <option value="Badminton">Badminton</option>
				 <option value="voly">Voly</option>
				 <option value="Basket">Basket</option>
				 <option value="Tenis">Tenis</option>
				 </select></td>
	</tr>
	<tr>
	<td><font color="gold"face="Berlin Sans FB Demi"size="3">Durasi</td><td>:</td><td><input type="text" name="durasi"></td>
	</tr>
</table></table></center>
<center><input type="submit" name="Input" value="Input">
		<input type="reset" name="Reset" value="Reset">
</form>
</center>
</body>
<font color="#0000ff"face="Eras Bold ITC"size="3">
<center>
<table border="1">
<tr>
	<td width="150px"><font color="blue"face="Gill Sans Ultra Bold"size="3">Nama Pemesan</td>
	<td><font color="blue"><center>:</td>
	<td>
<font color="blue"face="Gill Sans Ultra Bold"size="3">
<?php
	if(isset($_POST['Input']))
{	
	$nama=$_POST['nama'];
	echo "$nama";
	}
	?>
	</td>
	</tr>
<tr>
	<td><font color="blue"face="Gill Sans Ultra Bold"size="3">Nomor Ponsel</td>
	<td><font color="blue"><center>:</td>
	<td>
<font color="blue"face="Gill Sans Ultra Bold"size="3">	
<?php
	if(isset($_POST['Input']))
{	
	$ponsel=$_POST['ponsel'];
	echo "$ponsel";
	}
	?>
</td>
</tr>
<tr>
	<td><font color="blue"face="Gill Sans Ultra Bold"size="3">Keperluan</td>
	<td><font color="blue"><center>:</td>
	<td>
<font color="blue"face="Gill Sans Ultra Bold"size="3">	
<?php
	if(isset($_POST['Input']))
{	
	
	$Gedung=$_POST['Gedung'];
	echo "$Gedung";
	}
	?>
	</td>
	</tr>
<tr>
	<td><font color="blue"face="Gill Sans Ultra Bold"size="3">Durasi</td>
	<td><font color="blue"><center>:</td>
	<td>
<font color="blue"face="Franklin Gothic Heavy"size="3">	
<?php
	if(isset($_POST['Input']))
{	
	
	$durasi=$_POST['durasi'];
	echo "$durasi";
	}
	?>
	</td>
</tr>
<tr>
	<td><font color="blue"face="Gill Sans Ultra Bold"size="3">Tarif</td>
	<td><font color="blue"><center>:</td>
	<td>
<font color="blue"face="Gill Sans Ultra Bold"size="3">	
<?php
	if(isset($_POST['Input']))
{	
	
	$durasi=$_POST['durasi'];
	$bad=50000*$durasi;
	$fut=60000*$durasi;
	$ten=100000*$durasi;
	$bas=65000*$durasi;
	$vol=55000*$durasi;
	if($Gedung=="Futsal")
	{
	echo"$fut";
	}
	else if($Gedung=="Badminton")
	{
	echo"$bad";}
	else if($Gedung=="Voly")
	{
	echo"$vol";}
	else if($Gedung=="Basket")
	{
	echo"$bas";}
	else 
	{
	echo"$ten";}
	}
	?>
</td>
</tr>
<tr>
	<td colspan="3">
<font color="blue"face="Gill Sans Ultra Bold"size="3">	
	<?php
	if(isset($_POST['Input']))
{	

	echo"^:^PEMESANAN ANDA AKAN KAMI PROSES^:^";
	}
	?>
	</td>
</tr>
</table></center>
</font>
</html>