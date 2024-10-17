<?php
    include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include

?>
<!DOCTYPE html>
<html>
<head>
    <title>TRANSAKSI</title>

</head>
<body>

    <?php

    include ('tampilan/header.php');
    include ('tampilan/footer.php');
    include ('tampilan/sidebar.php');
?>

    <!-- main content -->
    <div class="main-content bg-primary" style="background-image: url(assets/back12.png); background-repeat: no-repeat; background-size:cover;">
    <body style="background-image: url(assets/back12.png); background-repeat: no-repeat; background-size:cover;">
        <section class="section">
          <div class="section-header">
            <h1>TRANSAKSI</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item text-primary">Transaksi</div>
            </div>
        </div>
         <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                  <section class="section">
             <h5>TRANSAKSI PEMBAYARAN</h5> 
                <div class="card-header-form">
              <form action="proses_transaksi.php" method="post">
            </div> 
          </div>
            <div class="input-group mb-3 col-md-12">
             <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">ID Petugas</span>
               </div>
                <input type="text" name="id_petugas" class="form-control" placeholder="ID PETUGAS" aria-label="masukkan id petugas" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3 col-md-12">
             <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">NISN</span>
               </div>
                <input type="text" name="nisn" class="form-control" placeholder="NISN" aria-label="masukkan nisn" aria-describedby="basic-addon1">
                </div>

               <div class="input-group mb-3 col-md-12">
             <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Tanggal Bayar</span>
               </div>
                <input type="date" name="tgl_bayar" class="form-control" placeholder="tgl_bayar" aria-label="tanggal" aria-describedby="basic-addon1">
                </div> 

                <div class="input-group mb-3 col-md-12">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Bulan Bayar</label>
              </div>
              <select class="custom-select" name= "bulan_dibayar" id="inputGroupSelect01">
                <option selected>--pilih bulan--</option>
                <option value="januari">Januari</option>
                <option value="februari">Februari</option>
                <option value="maret">Maret</option>
                <option value="april">April</option>
                <option value="mei">Mei</option>
                <option value="juni">Juni</option>
                <option value="juli">Juli</option>
                <option value="agustus">Agustus</option>
                <option value="september">September</option>
                <option value="oktober">Oktober</option>
                <option value="november">November</option>
                <option value="desember">Desember</option>
              </select>
            </div>  

            <div class="input-group mb-3 col-md-12">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Tahun Bayar</label>
                </div>
                <select class="custom-select" name="tahun_dibayar" id="inputGroupSelect01">
                  <option selected>--pilih tahun--</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                </select>
              </div>

              <div class="input-group mb-3 col-md-12">
             <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">ID SPP</span>
               </div>
                <input type="text" name="id_spp" class="form-control" placeholder="" aria-label="masukkan id" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3 col-md-12">
             <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Masukkan Nominal</span>
               </div>
                <input type="text" name="jumlah_bayar" class="form-control" placeholder="Tanpa Rupiah" aria-label="masukkan nominal" aria-describedby="basic-addon1">
                </div>

            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-success">Bayar</button>
            </form>
            </div>
            <br/>  
            </section>

            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                   <form action="" method="get">
                      <h5>DATA BAYAR SISWA SESUAI NISN</h5> 
                        <table class="table">
                        <tr>
                        <td>NISN</td>
                        <td>:</td>
                        <td>
                        <input class="form-control" type="text" name="nisn" placeholder="Data NISN Lihat Di Form Siswa">
                        </td>
                        <td>
                        <button class="btn btn-success" type="submit" name="cari">Cari</button>
                        </td>
                        </tr>
                        </table>
                      </form>
            </div>
              </div>
                  </div>
                    </div>
                      
                <?php 
                if (isset($_GET['nisn']) && $_GET['nisn']!='') {
                  $query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn='$_GET[nisn]'");
                  $data = mysqli_fetch_array($query);
                  $nisn = $data['nisn'];
                ?>
                
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
                <th scope="col">Action</th>
                <tbody>
                  <?php 
                  $query = mysqli_query($koneksi,"SELECT * FROM pembayaran WHERE nisn='$data[nisn]' ORDER BY bulan_dibayar ASC");
                  $data= mysqli_fetch_array($query);
                  $nisn = $data['nisn'];
                  $no = 1; //variabel untuk membuat nomor urut
                  ?>
                  <tr>
                    <td><?php echo $data['id_petugas']; ?></td>
                    <td><?php echo $data['nisn']; ?></td>
                    <td><?php echo $data['tgl_bayar']; ?></td>
                    <td><?php echo $data['bulan_dibayar']; ?></td>
                    <td><?php echo $data['tahun_dibayar']; ?></td>
                    <td><?php echo $data['id_spp']; ?></td>
                    <td><?php echo $data['jumlah_bayar']; ?></td>
                    <td>
                      <a href="edit_transaksi.php?id=<?php echo $data['id_pembayaran']; ?> class="btn btn-primary"><i class="fas fa-edit"></i></a>
                      <a href="cetak_transaksi.php?id=<?php echo $data['id_pembayaran']; ?> class="btn btn-warning" onClick="cetak_transaksi"><i class="fas fa-print"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <?php
              }
              ?>          
        </div> 
        </div>
              </div>
             </div>
            </div>
  </body>
</html>