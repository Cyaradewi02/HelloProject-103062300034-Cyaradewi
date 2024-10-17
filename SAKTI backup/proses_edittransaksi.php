<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id = $_POST['id'];
  $tgl_bayar = $_POST['tgl_bayar'];
  $jumlah_bayar = $_POST['jumlah_bayar'];

  //cek dulu jika merubah gambar produk jalankan coding ini
  
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                    $query  = "UPDATE pembayaran SET tgl_bayar = '$tgl_bayar', jumlah_bayar='$jumlah_bayar' WHERE id_pembayaran= '$id'";
                    $result = mysqli_query($koneksi, $query);
                    // periksa query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='transaksi.php';</script>";
                    }
              
			  
			  ?>
