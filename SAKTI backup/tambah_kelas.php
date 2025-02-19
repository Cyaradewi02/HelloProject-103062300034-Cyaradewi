<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tambah SPP</title>
   
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
            <h1>TAMBAH KELAS</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="kelas.php">Data Kelas</a></div>
              <div class="breadcrumb-item text-primary">Tambah Kelas</div>
            </div>
          </div>
          <div class="row">
              <div class="col-12">
                <div class="card">
                  </div>
                  <div class="card-body bg-primary">
                    <div class="row mt-4">
                      <div class="col-4 col-lg-4 offset-lg-4">
                        <div class="wizard-steps">
                          <div class="wizard-step wizard-step-active">
                            <div class="wizard-step-icon">
                              <i class="fas fa-school"></i>
                            </div>
                            <div class="wizard-step-label">
                              Formulir Kelas
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <form class="wizard-content mt-2" method="post" action="proses_tambahkelas.php">
                      <div class="wizard-pane">
                        <div class="row">
                        <div class="form-group row align-items-center">
                          <label class="col-md-9 text-md-right text-white">NAMA KELAS</label>
                          <div style="margin-left:315px;">
                            <input type="text" name="nama_kelas" class="form-control">
                          </div>
                        </div>
                        <div class="row">
                        <div class="form-group row align-items-center">
                          <label class="col-md-9 text-md-left text-white">KOMPETENSI KEAHLIAN</label>
                          <div style="margin-right:100px;">
                            <input type="text" name="kompetensi_keahlian" class="form-control">
                          </div>
                        </div>
</div>
                        <div class="form-group row">
                          <div class="col-md-9"></div>
                          <div class="col-lg-19 col-md-17 text-right">
                          <div style="margin-left:480px;">
                          <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-icon icon-right btn-primary">Tambah Kelas<i class="fas fa-arrow-right"></i></button>
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