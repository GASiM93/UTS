<html>
<head>
<title></title>
</head>
<body>
<form action="proses.php" method="post">
<table align="center" border="0" cellpadding="0" cellspacing="0">
<tr align="center">
<td><h3>Input Data Pemantauan Covid19<br></h3><td>
</tr>


<table width="450" border="0" cellpadding="0" cellspacing="1" align="center">
<tr>
<td>Nama Mahasiswa	</td>
<td><input type=”text” name="nama" width=”75" value=""/></td>
</tr>
<tr>
<td>Nim </td>
<td><input type=”text” name="nim" width=”75" value="" /></td>
</tr>
<tr>
<td>Nama wilayah : </td>
<td>
<select name="wilayah" >
<option value="">- Pilih wilayah -</option>
<option value="DKI jakarta">DKI JAKARTA</option>
<option value="jawa barat">JAWA BARAT</option>
<option value="banten">BANTEN</option>
<option value="jawa tengah">JAWA TENGAH</option>
</select></td>

<tr>
<td>jumlah positif: </td>
<td><input type=”text” name="jumlahpositif" width=”75" ></td>
</tr>
<tr>
<td>jumlah dirawat : </td>
<td><input type=”text” name="jumlahdirawat" width=”75" ></td>
</tr>
<tr>
<td>jumlah sembuh : </td>
<td><input type=”text” name="jumlahsembuh" width=”75" ></td>
</tr>
<tr>
<td>jumlah meninggal : </td>
<td><input type=”text” name="jumlahmeninggal" width=”75" ></td>
</tr>
<tr>
<td><input type="submit" value="kirim"></td>
</tr>

</table>

</table>
</form>



</html>