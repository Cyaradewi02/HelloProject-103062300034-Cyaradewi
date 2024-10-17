<?php
	include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include

?>
<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN</title>

</head>
<body>

	<?php

	include ('tampilan/header.php');
	include ('tampilan/footer.php');
	include ('tampilan/sidebar.php');
?>

		<!-- Main Content -->
    <div class="main-content bg-primary" style="background-image: url(assets/back12.png); background-repeat: no-repeat; background-size:cover;">
    <body style="background-image: url(assets/back12.png); background-repeat: no-repeat; background-size:cover;">
        <section class="section">
          <div class="section-header">
            <h1>LAPORAN</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item text-primary">Laporan</div>
            </div>
          </div>
              <div class="col-md-14">
                <div class="card">
                  <div class="card-header">
                    <h4>LAPORAN TRANSAKSI</h4>
                    <div class="card-header-form">
                    </div>
                  </div>
              <form method="POST" action="ekspor.php" enctype="multipart/form-data" >
        <div class="card-header">
        <div class="form-group col-md-10"> 
                        <div style="margin-left:150px;">
                        <div style="margin-top:10px;">
          <label>Dari Tanggal</label>
          <input type="date" name="daritanggal" autofocus="" required="" />
        </div>
        <div class="form-group col-md-10px"> 
                        <div style="margin-left:350px;">
                        <div style="margin-top:-45px;">
          <label>Sampai Tanggal</label>
          <input type="date" name="sampaitanggal" required=""/>
        </div>     
</div>
<div class="form-group col-md-12"> 
                        <div style="margin-left:240px;">
                        <div style="margin-top:35px;">
         <button type="submit">Print Data</button>
        </div>
        </section>
      </form>
</body>
</html>