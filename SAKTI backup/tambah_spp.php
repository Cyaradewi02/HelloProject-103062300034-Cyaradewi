<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>TAMBAH SPP</title>
   
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
            <h1>TAMBAH SPP</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="spp.php">Data SPP</a></div>
              <div class="breadcrumb-item text-primary">Tambah SPP</div>
            </div>
          </div>
          <div class="row">
              <div class="col-12">
                <div class="card">
                  </div>
                  <div class="card-body bg-primary">
                    <div class="row mt-2">
                      <div class="col-8 col-lg-4 offset-lg-4">
                        <div class="wizard-steps">
                          <div class="wizard-step wizard-step-active">
                            <div class="wizard-step-icon">
                              <i class="fas fa-money-check-alt"></i>
                            </div>
                            <div class="wizard-step-label">
                              FORMULIR SPP
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <form class="wizard-content mt-2" method="post" action="proses_tambahspp.php">
                      <div class="wizard-pane">
                        <div class="form-row">
                        <div class="form-group row align-items-center">
                          <label class="col-md-9 text-md-right text-white">TAHUN</label>
                          <div style="margin-left:315px;">
                            <input type="text" name="tahun" class="form-control">
                          </div>
                        </div>
                    </form>
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-white">NOMINAL</label>
                          <div style="margin-right:100px;">
                            <input type="text" name="nominal" class="form-control">
                          </div>
                        </div>
                      </div>
<div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-icon icon-right btn-primary">Tambah Pembayaran<i class="fas fa-arrow-right"></i></button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      