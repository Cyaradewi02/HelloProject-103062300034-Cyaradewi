<?php
include 'koneksi.php'; //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
if (isset($_GET['id'])) {
  // ambil nilai id dari url dan disimpan dalam variabel $id
  $id = ($_GET["id"]);

  // menampilkan data dari database yang mempunyai id=$id
  $query = "SELECT * FROM pembayaran,siswa,kelas WHERE id_pembayaran='$id' AND pembayaran.nisn=siswa.nisn AND siswa.id_kelas=kelas.id_kelas";
  
  $result = mysqli_query($koneksi, $query);
  // jika data gagal diambil maka akan tampil error berikut
  if(!$result){
    die ("Query Error: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
  }
  // mengambil data dari database
  $data = mysqli_fetch_assoc($result);
    // apabila data tidak ada pada database maka akan dijalankan perintah ini
     if (!count($data)) {
        echo "<script>alert('Data tidak ditemukan pada database');window.location='transaksi.php';</script>";
     }
} else {
  // apabila tidak ada data GET id pada akan di redirect ke index.php
  echo "<script>alert('Masukkan data id.');window.location='transaksi.php';</script>";
}      
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Kwitansi Pembayaran SPP SMKN 1 GUNUNGPUTRI</title>
<!-- General CSS Files -->
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fontawesome-free/css/all.css">
</head> 
<body>

        <section class="section"> 
          <div class="section-header">
		       <div class="section-body">
            <div class="invoice">
              <div class="invoice-print">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="invoice-title">
                      <h2>Kwitansi Pembayaran SPP SMKN 1 GUNUNGPUTRI</h2>
                      <div class="invoice-number"></div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-6">
                        <address>
                          <strong>Data Siswa:</strong><br>
                          <?php echo $data['nisn']; ?><br>
                          <?php echo $data['nama']; ?><br>
                          <?php echo $data['nama_kelas']; ?><br>
                        
                        </address>
                      </div>
                      <div class="col-md-6 text-md-right">
                        <address>
                          <strong>Penanggung Jawab:</strong><br>
                          Dewi<br>
                          Jl. Barokah No. 6, Wanaherang<br>
                          Kab.Bogor, Indonesia
                        </address>
                      </div>
                    </div>

              
                    <div class="table-responsive">
                      <table class="table table-striped table-hover table-md">
                        <tr>
                          <th data-width="40">No.</th>
                          <th>Tanggal Pembayaran</th>
                          <th>Bulan Dibayar</th>
                          <th>Nominal</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td><?php echo $data['tgl_bayar']; ?></td>
                          <td><?php echo $data['bulan_dibayar']; ?></td>
                          <td><?php echo $data['jumlah_bayar']; ?></td>
                        </tr> 
                      </table>
                    </div> 
</div>
                    <div class="row mt-4">
                      <div class="col-lg-8">
                        <p class="section-lead" style="margin-left: 15px;">Mohon cek invoice sebelum meninggalkan tempat. Apabila sudah meninggalkan tempat maka kesalahan bukan tanggung jawab kami. Terimakasih</p>
                        <div class="d-flex">
                          <div class="mr-2 bg-visa" data-width="61" data-height="38"></div>
                          <div class="mr-2 bg-jcb" data-width="61" data-height="38"></div>
                          <div class="mr-2 bg-mastercard" data-width="61" data-height="38"></div>
                          <div class="bg-paypal" data-width="61" data-height="38"></div>
                        </div>
                       </div>
</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
            </div>
          </div>
        </section>
          </div>
		<script>
			window.print();
		</script>
    </body> 