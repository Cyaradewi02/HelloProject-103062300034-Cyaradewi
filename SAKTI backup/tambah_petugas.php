<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>TAMBAH PENGGUNA</title>
   
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
            <h1>TAMBAH PETUGAS</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="petugas.php">Data Petugas</a></div>
              <div class="breadcrumb-item text-primary">Tambah Petugas</div>
            </div>
          </div>
          <!-- <div class="row">
              <div class="col-12">
                <div class="card">
                  </div>
                  <div class="card-body bg-primary">
                    <div class="row mt-4">
                      <div class="col-2 col-lg-4 offset-lg-4">
                        <div class="wizard-steps">
                          <div class="wizard-step wizard-step-active">
                            <div class="wizard-step-icon">
                              <i class="fas fa-school"></i>
                            </div>
                            <div class="wizard-step-label">
                              Isi Formulir Petugas
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> -->

                    <form class="wizard-content mt-2" method="post" action="proses_tambahpetugas.php">
                      <div class="form-row">
                      <div class="form-group col-md-6">
                          <label class="col-md-1 text-md-right text-white">ID</label>
                          <div class="col-lg-8 col-md-10">
                            <input type="text" name="nisn" class="form-control">
                          </div>
                        </div>
                        <div class="form-group col-md-6">
                          <label class="col-md-1 text-md-right text-white">Username</label>
                          <div class="col-lg-8 col-md-10">
                            <input type="text" name="nis" class="form-control">
                          </div>
                        </div>
                        <div class="form-group col-md-6">
                          <label class="col-md-1 text-md-right text-white">Password</label>
                          <div class="col-lg-8 col-md-10">
                            <input type="text" name="nama" class="form-control">
                          </div>
                        </div>

                        <div class="form-group col-md-6">
                          <label class="col-md-1 text-md-right text-white">Nama</label>
                          <div class="col-lg-8 col-md-10  ">
                            <input type="text" name="username" class="form-control">
                          </div>
                        </div>
                        <div class="form-group col-md-6"> 
                          <label class="col-md-1 text-md-right text-white">Level</label>
                          <div class="col-lg-8 col-md-10">
                          <select type="text" name="level" class="form-control">
                            <option value="selected"> silahkan pilih level</option>
                          </div>
                        </div>
                              <?php
                                  // jalankan query untuk menampilkan semua data diurutkan berdasarkan
                                  $query = "SELECT * FROM petugas ORDER BY level ASC";
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
                             <option value="<?php echo $row['id_petugas']; ?>"><?php echo $row['level']; ?></option>
                             <?php
                                    $no++; //untuk nomor urut terus bertambah 1
                                  }
                                  ?>
                                </select>
                          </div>
                        </div>
                        <div class="form-group col-md-6"> 
                        <div style="margin-left:100px;">
                        <div style="margin-top:35px;">
              <button type="submit" class="btn btn-icon icon-right btn-primary">Tambah Petugas<i class="fas fa-arrow-right"></i></button>
            </form>
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