<?php 

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$wilayah = $_POST['wilayah'];
$jp = $_POST['jumlahpositif'];
$jd = $_POST['jumlahdirawat'];
$js = $_POST['jumlahsembuh'];
$jm = $_POST['jumlahmeninggal'];


?>

<h3 align="center">Data Pemantauan Covid19 wilayah <?php echo "" . $wilayah; ?><br>
<?php echo date('l, d-m-Y  h:i:s a'); ?><br>
nama operator <?php echo "" . $nama; ?>  nim <?php echo "" . $nim; ?>
</h3>
<table width=400 border=0 align="center">


<?php


echo "jumlah positif "  . $jp; 
echo "<br/>";
echo "jumlah dirawat " . $jd;
echo "<br/>";
echo "jumlah sembuh " . $js;
echo "<br/>";
echo "jumlah meninggal " . $jm;

?>