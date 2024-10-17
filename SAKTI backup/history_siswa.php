<?php
    include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scale=1,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
    <title>TRANSAKSI</title>
</head>

   
    <?php
    include ('tampilan/header.php');
    include ('tampilan/footer.php');
    ?>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="img/org/avatar.png" class="rounded-circle mr-1">
            Halo <b><?php echo $_SESSION['nama']; ?></b> Anda adalah Siswa<b></b></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a>Web Pembayaran SPP</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a>SKIEL</a>
          </div>
          <ul class="sidebar-menu">
              <ul class="sidebar-menu">
              <li class="menu-header">FITUR</li>
              <li><a class="nav-link" href="history_siswa.php"><i class="fas fa-fire"></i> <span>HISTORY PEMBAYARAN</span></a></li>
        </aside>
      </div>

    <!-- main content -->
    <div class="main-content bg-primary" style="background-image: url(assets/back12.png); background-repeat: no-repeat; background-size:cover;">
    <body style="background-image: url(assets/back12.png); background-repeat: no-repeat; background-size:cover;">
        <section class="section">
          <div class="section-header">
            <h1>HISTORY</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="history_siswa.php">History</a></div>
            </div>
        </div>
        <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4>History Pembayaran</h4>
                    <div class="card-header-form">
                    </div>
                  </div>
        <form action="" method="get">
                      <table class="table">
                      <tr>
                      <td>NISN</td>
                      <td>:</td>
                      <td>
                      <input class="form-control" type="text" name="nisn" placeholder="--Masukan NISN--">
                      </td>
                      <td>
                      <button class="btn btn-success" type="submit" name="cari">Cari</button>
                      </td>
                      </tr>

                      </table>
                      </form>
                <?php 
                if (isset($_GET['nisn']) && $_GET['nisn']!='') {
                  $query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn='$_GET[nisn]'");
                  $data = mysqli_fetch_array($query);
                  $nisn = $data['nisn'];
                
                ?>
                </div>

                <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5>DATA SISWA</h5>
                </div>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">NISN</th>
                      <th scope="col">NAMA SISWA</th>
                      <th scope="col">ID KELAS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <td><?php echo $data['nisn']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['id_kelas']; ?></td>
                  </tbody>
                </table>
                </div>
              </div>
             </div>

             <div class="row">
          <div class="col-md-12 ">
            <div class="card">
              <div class="card-header">
                <h5>SPP SISWA</h5>
                </div>
                <table class="table table-striped ">
                <thead> 
                  <tr>
                  
                <th scope="col">id petugas</th>
               <th scope="col"> NISN</th>
                <th scope="col">Tgl Bayar</th>
                <th scope="col">Bulan Bayar</th>
                <th scope="col">Tahun Bayar</th>
                <th scope="col">id spp</th>
                <th scope="col">Jumlah</th>
                
                  </tr>
                </thead>
                </div>
                </div>
                </div>
                </div>
                <tbody>
                  <?php 
                  $query = mysqli_query($koneksi,"SELECT * FROM pembayaran WHERE nisn='$data[nisn]' ORDER BY bulan_dibayar ASC");
                

                  while ($data=mysqli_fetch_array($query)) {
                    echo" <tr>
                          
                          <td>$data[id_petugas]</td>
                          <td>$data[nisn]</td>
                          <td>$data[tgl_bayar]</td>
                          <td>$data[bulan_dibayar]</td>
                          <td>$data[tahun_dibayar]</td>
                          <td>$data[id_spp]</td>
                          <td>$data[jumlah_bayar]</td>

                        </tr>";
                  }

                   ?>
                </tbody>
              </table>  
    <?php 
    }
    ?>      
        </div>
  </body>
</html>