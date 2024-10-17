<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
   
  </head>
<body>
  <?php

  include ('tampilan/header.php');
  include ('tampilan/sidebar.php');
  include ('tampilan/footer.php');
?>
<div class="main-content bg-primary">
        <section class="section">
          <div class="section-header">
            <h1>TAMBAH SISWA</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item text-primary"><a href="siswa.php">Data Siswa</a></div>
              <div class="breadcrumb-item text-primary">Tambah Siswa</div>
            </div>
          </div>
          <!-- <div class="card">
                  <div class="card-header">
                    <h4>Tambah Siswa</h4>
                  </div>
                  <div class="card-body">
                    <form action="proses_tambahsiswa.php" method="POST">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputnisn">NISN</label>
                        <input type="text" name="nisn" class="form-control">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputAddress">Address</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputAddress2">Address 2</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
</div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                          <option selected>Choose...</option>
                          <option>...</option>
                        </select>
                      </div>
                      <div class="form-row">
                      <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-primary">Submit</button>
                  </div>
                </form>
                </div> -->
          <!-- <div class="row">
              <div class="col-12">
                <div class="card bg-primary">
                  </div> -->
                  <!-- <div class="card-body bg-primary">
                    <div class="row mt-4">
                      <div class="col-8 col-lg-4 offset-lg-4">
                        <div class="wizard-steps">
                          <div class="wizard-step wizard-step-active">
                            <div class="wizard-step-icon">
                              <i class="fas fa-school"></i>
                            </div>
                            <div class="wizard-step-label">
                              Formulir siswa
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> -->

                    <form class="wizard-content mt-2" method="post" action="proses_tambahsiswa.php">
                      <div class="form-row">
                      <div class="form-group col-md-6">
                          <label class="col-md-1 text-md-right text-white">NISN</label>
                          <div class="col-lg-8 col-md-10">
                            <input type="text" name="nisn" class="form-control">
                          </div>
                        </div>
                        <div class="form-group col-md-6">
                          <label class="col-md-1 text-md-right text-white">NIS</label>
                          <div class="col-lg-8 col-md-10">
                            <input type="text" name="nis" class="form-control">
                          </div>
                        </div>
                        <div class="form-group col-md-6">
                          <label class="col-md-1 text-md-right text-white">NAMA</label>
                          <div class="col-lg-8 col-md-10">
                            <input type="text" name="nama" class="form-control">
                          </div>
                        </div>

                        <div class="form-group col-md-6">
                          <label class="col-md-1 text-md-right text-white">USERNAME</label>
                          <div class="col-lg-8 col-md-10  ">
                            <input type="text" name="username" class="form-control">
                          </div>
                        </div>
                        <div class="form-group col-md-6"> 
                          <label class="col-md-1 text-md-right text-white">PASSWORD</label>
                          <div class="col-lg-8 col-md-10">
                            <input type="text" name="password" class="form-control">
                          </div>
                        </div>
                        <div class="form-group col-md-6">
                          <label class="col-md-1 text-md-3 right text-white">KELAS</label>
                          <div class="col-lg-8 col-md-10">
                             <select  class="form-control" name="id_kelas">
                             <option value="selected"> silahkan pilih kelas</option>
                             <?php
                                  // jalankan query untuk menampilkan semua data diurutkan berdasarkan
                                  $query = "SELECT * FROM kelas ORDER BY nama_kelas ASC";
                                  $result = mysqli_query($koneksi, $query);
                                  //mengecek apakah ada error ketika menjalankan query
                                  if(!$result){
                                    die ("Query Error: ".mysqli_errno($koneksi).
                                       " - ".mysqli_error($koneksi));
                                  }

                                  //buat perulangan untuk element tabel dari data mahasiswa
                                  $no = 1; //variabel untuk membuat nomor urut
                                  // hasil query akan disimpan dalam variabel $data dalam bentuk array
                                  // kemudian dicetak dengan perulangan while
                                  while($row = mysqli_fetch_assoc($result))
                                  {
                                  ?>
                             <option value="<?php echo $row['id_kelas']; ?>"><?php echo $row['nama_kelas']; ?></option>
                             <?php
                                    $no++; //untuk nomor urut terus bertambah 1
                                  }
                                  ?>
                                  </select>
                          </div>
                          </div>
                             <div class="form-group col-md-6">
                          <label class="col-md-1 text-md-right text-white">ALAMAT</label>
                          <div class="col-lg-8 col-md-10-">
                            <input type="text" name="alamat" class="form-control">
                          </div>
                        </div>
                        <div class="form-group col-md-6">
                          <label class="col-md-2 text-md-right text-white">NO TELP</label>
                          <div class="col-lg-8 col-md-10">
                            <input type="text" name="no_telp" class="form-control">
                          </div>
                        </div>
                        <div class="form-group col-md-6">
                          <label class="col-md-3 text-md-3 right text-white">TAHUN MASUK</label>
                          <div class="col-lg-8 col-md-10">
                             <select  class="form-control" name="tahun">
                             <option value="not_option">silahkan pilih tahun masuk</option>
                             </select>
                        </div>
                          </div>
</div>
</div>
                             
                       <!-- <div class="form-group col-md-6">
                          <label class="col-md-4 text-md-right text-white">ALAMAT</label>
                          <div class="col-lg-8 col-md-10-">
                            <input type="text" name="alamat" class="form-control">
                          </div>
                        </div> -->
                        <!-- <div class="form-group col-md-6">
                          <label class="col-md-6 text-md-right text-white">NO TELP</label>
                          <div class="col-lg-8 col-md-10">
                            <input type="text" name="no_telp" class="form-control">
                          </div>
                        </div>
                        <div class="form-group col-md-6">
                          <label class="col-md-4 text-md-right text-white">TAHUN MASUK</label>
                          <div class="col-lg-8 col-md-10">
                             <select  class="form-control" name="tahun">
                             <option value="not_option"> silahkan pilih tahun masuk</option> -->
                              <!-- <?php
                                  // jalankan query untuk menampilkan semua data diurutkan berdasarkan
                                  $query = "SELECT * FROM kelas ORDER BY nama_kelas ASC";
                                  $result = mysqli_query($koneksi, $query);
                                  //mengecek apakah ada error ketika menjalankan query
                                  if(!$result){
                                    die ("Query Error: ".mysqli_errno($koneksi).
                                       " - ".mysqli_error($koneksi));
                                  }

                                  //buat perulangan untuk element tabel dari data mahasiswa
                                  $no = 1; //variabel untuk membuat nomor urut
                                  // hasil query akan disimpan dalam variabel $data dalam bentuk array
                                  // kemudian dicetak dengan perulangan while
                                  while($row = mysqli_fetch_assoc($result))
                                  {
                                  ?>
                             <option value="<?php echo $row['id_kelas']; ?>"><?php echo $row['nama_kelas']; ?></option>
                             <?php
                                    $no++; //untuk nomor urut terus bertambah 1
                                  }
                                  ?>
                             </select> -->
                                    
                                  </div>
    
                                </div>
                        </div>
                        
                              <?php
                                  // jalankan query untuk menampilkan semua data diurutkan berdasarkan
                                  $query = "SELECT * FROM spp ORDER BY tahun ASC";
                                  $result = mysqli_query($koneksi, $query);
                                  //mengecek apakah ada error ketika menjalankan query
                                  if(!$result){
                                    die ("Query Error: ".mysqli_errno($koneksi).
                                       " - ".mysqli_error($koneksi));
                                  }

                                  //buat perulangan untuk element tabel dari data mahasiswa
                                  $no = 1; //variabel untuk membuat nomor urut
                                  // hasil query akan disimpan dalam variabel $data dalam bentuk array
                                  // kemudian dicetak dengan perulangan while
                                  while($row = mysqli_fetch_assoc($result))
                                  {
                                  ?>
                             <option value="<?php echo $row['id_spp']; ?>"><?php echo $row['tahun']; ?></option>
                             <?php
                                    $no++; //untuk nomor urut terus bertambah 1
                                  }
                                  ?>
                             </select>
                                    
                                  </div>
                          </div>
                        </div>
                        <div class="form-group col-md-10"> 
                        <div style="margin-left:806px;">
                        <div style="margin-top:-107px;">
                            <button type="submit" class="btn btn-icon icon-right btn-primary">TAMBAH SISWA<i class="fas fa-arrow-right"></i></button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    </div>