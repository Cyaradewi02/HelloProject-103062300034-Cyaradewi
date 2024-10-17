<?php
session_start();
include 'koneksi.php';
if (isset($_POST['daritanggal'])){
    $daritanggal = ($_POST['daritanggal']);
 $sampaitanggal = ($_POST['sampaitanggal']);	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<style type="text/css">
.head {
	width:100%;
	height:100px;
	border-bottom:1px solid;
	}
</style>
<div class="head">
<table>
<tr>
<td width="10%"><img src="img/log5.png" width="70px" /></td>
<td align="margin-left:500px" width="90%"><font style="font-size:24px; font-family:Arial, Helvetica, sans-serif;"><br />SAKTI SMKN 1 GUNUNGPUTRI<br/></font><br /><i><font style="font-size:15px;"></font></i></td>
</tr>
</table>
</div><br /><br />
<div style="font-size:24px; text-align:center;">Data Laporan Keuangan SPP</div><br /><br />
<table align="center" border="1" cellpadding="8" cellspacing="0">
<tr>
          <th>No</th>
          <th>NISN</th>
          <th>Nama</th>
		  <th>Kelas</th>
		  <th>Tanggal Bayar</th>
		  <th>Bulan Dibayar</th>
          <th>Tahun Dibayar</th>
		  <th>Petugas</th>
  </tr>
<?php
$query = "SELECT * FROM pembayaran,siswa,spp,petugas,kelas WHERE pembayaran.nisn=siswa.nisn AND siswa.id_spp=spp.id_spp AND pembayaran.id_petugas=petugas.id_petugas AND siswa.id_kelas=kelas.id_kelas AND pembayaran.tgl_bayar between '$daritanggal' AND '$sampaitanggal'";
$result = mysqli_query($koneksi, $query);
if(!$result){
  die ("Query Error: ".mysqli_errno($koneksi).
	 " - ".mysqli_error($koneksi));
}
$no = 1;
  while ($data = mysqli_fetch_assoc($result)){
$tahunsekarang=date('Y');
  $tahunmasuksiswa=$data['tahun'];
  $diff  = ($tahunsekarang-$tahunmasuksiswa) ;   
  if($diff==0){
  $kelasnow="X";
  }
  
  else if($diff==1){
  $bulansekarang=date('n');
  if($bulansekarang==7 ||$bulansekarang==8 ||$bulansekarang== 9 ||$bulansekarang==10 || $bulansekarang==11 || $bulansekarang==12){
  $kelasnow= "XI";
  }
  else{
  $kelasnow="X";
  }
  }
  
  else if($diff==2){
  $bulansekarang=date('n');
  if($bulansekarang==7 ||$bulansekarang==8 ||$bulansekarang== 9 ||$bulansekarang==10 || $bulansekarang==11 || $bulansekarang==12){
  $kelasnow= "XII";
  }
  else{
  $kelasnow="XI";
  }
  }
  
  else if($diff==3){
  $bulansekarang=date('n');
  if($bulansekarang==7 ||$bulansekarang==8 ||$bulansekarang== 9 ||$bulansekarang==10 || $bulansekarang==11 || $bulansekarang==12){
  $kelasnow= "alumni";
  }
  else{
  $kelasnow="XII";
  }
  }
  
  else if($diff>3){
 
  $kelasnow="alumni";
  
  }   
  
?>
<tr align="left">
<tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $data['nisn']; ?></td>
		  <td><?php echo $data['nama']; ?></td>
		  <td><?php echo $data['nama_kelas']; ?></td>
		  <td><?php echo $data['tgl_bayar']; ?></td>
		  <td><?php echo $data['bulan_dibayar']; ?></td>
		  <td><?php echo $data['tahun_dibayar']; ?></td>
		  <td><?php echo $data['nama_petugas']; ?></td> 
      </tr>
<?php
 $no++; 
}}else{
	echo '<tr><td colspan="6" align="center">TIDAK ADA DATA</td></tr>';
}?>
</table>
<br/>
<table class="titik">
<tr>
<td>Gunungputri,.............2023</td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
</table>
<br/><br/><br/>(.......................................)
<table class="titik">
<?php
$query = "SELECT * FROM pembayaran,siswa,spp,petugas,kelas WHERE pembayaran.nisn=siswa.nisn AND siswa.id_spp=spp.id_spp AND pembayaran.id_petugas=petugas.id_petugas AND siswa.id_kelas=kelas.id_kelas AND pembayaran.tgl_bayar between '$daritanggal' AND '$sampaitanggal'";
$result = mysqli_query($koneksi, $query);
if(!$result){
  die ("Query Error: ".mysqli_errno($koneksi).
	 " - ".mysqli_error($koneksi));
}
?>
<tr>
<td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>(petugas)</u></b></td>
</tr>
</table>
<script>
window.print() 
</script>
</body>
</html>


