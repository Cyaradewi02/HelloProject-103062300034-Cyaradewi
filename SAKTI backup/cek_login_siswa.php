<?php 

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$nama = $_POST['nama'];
$password = $_POST['password'];


// menyeleksi data siswa dengan nama dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * from siswa where nama='$nama' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah nama dan password di temukan pada database
if($cek > 0){
	$data=mysqli_fetch_array($login);
	// mengaktifkan session pada php
	session_start();
	$_SESSION['nama']= $nama;
	$_SESSION['password']=$data['password'];
	
	// alihkan ke halaman dashboard siswa
	header("location:history_siswa.php");
	
}else{

	// alihkan ke halaman login kembali
	header("location:form_siswa.php?pesan=gagal");
}

?>
