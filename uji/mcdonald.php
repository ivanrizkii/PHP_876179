<html>
<head>
<title>Deby Delivery</title>
</head>
<body>
<font size="5" face="Comic Sans MS" color="red"><center>Deby Delivery</font></center>
	<center><table border="1" width="900px" height="500px">
	<tr><td bgcolor="#ff9966">
	<font color="black" size="3">
<pre>
	<form action="" name="pesanan" method="post">
		Nama Pemesan	: <input type="text" name="nama">
		Alamat		: <input type="text" name="alamat">
		Jenis Pesanan	: <input type="checkbox" name="regular" value="Regular"> Regular
				  <input type="checkbox" name="paket"> Paket
		Regular		: 
				  Makanan <select name="makanan"> 
						<option value="Fried Chicken"> Fried Chicken</option>
						<option value="Fried Potato"> Fried Potato</option>
						<option value="Beef Steak"> Beef Steak</option>
						<option value="Sup"> Sup</option>
						<option value="Hamburger"> Hamburger</option></select>
					Harga :<input type="text" name="harga1">
				  Minuman <select name="minuman"> 
						<option value="Orange Juice"> Orange Juice</option>
						<option value="Fanta"> Fanta</option>
						<option value="Pepsi"> Pepsi</option>
						<option value="Coca cola"> Coca cola</option>
						<option value="Avocado"> Avocado</option></select>
					Harga :<input type="text" name="harga2"><br>
		Paket 		: <select name="paket"><br>
						  <option value="Paket 1"> Paket 1</option><br>
						  <option value="Paket 2"> Paket 2</option><br>
						  <option value="Paket 3"> Paket 3</option><br>
						  <option value="Paket Combo"> Paket Combo</option><br></select>
		Harga 		: <input type="text" name="harga"><br>
		Total Bayar 	: <input type="text" name="bayar"><br>
</pre>
<center><input type="submit" name="Pesan" value="Pesan">
		<input type="reset" name="reset" value="Reset"></center>
</form>
</center>
</table>
</body>
</html>
<font color="red">
<?php
	if(isset($_POST['Pesan']))
{	
		$nama=$_POST['nama'];
		$alamat=$_POST['alamat'];
		$harga=$_POST['harga'];
		echo "Nama Pemesan: ".$nama;
		echo "<br>Alamat : ".$alamat;
		echo "<br>Harga : ".$harga;
		echo "<br>Jenis Pesan :<br>";
		if(isset($_POST['regular']))
		{
		echo"+".$_POST['regular']."<br>";
		}
}
?>		