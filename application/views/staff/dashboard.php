

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Dalam Pelayanan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php foreach($antrian as $d){
                            echo $d->no_pengunjung;
                            $this->session->set_userdata('no',$d->no_pengunjung);
                        }?>
                      </div>            
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-receipt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
            <!-- Earnings (Monthly) Card Example -->
            <?php foreach($menunggu as $d): ?>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Menunggu</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $d->total;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-stopwatch fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach;?>
            <!-- Pending Requests Card Example -->
            <?php foreach($selesai as $d): ?>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Selesai</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $d->total;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-sign-out-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Kunjungan Hari ini -->
            <?php foreach($data as $d): ?>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pengunjung Hari ini</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $d->total;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach;?>

          </div>
          <?php endforeach;?>
          <?php if ($this->session->userdata('status')!= 'dokter') { ?>
            <a href="<?php echo site_url('C_Dashboard/update');?>" class="btn btn-primary btn-lg active btn-block" role="button" aria-pressed="true">Antrian berikutnya <i class="fas fa-fw fa-arrow-circle-right"></i></a>
          <?php } ?>
          
          <!-- Content Row -->

          <div class="row mt-5">

            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  