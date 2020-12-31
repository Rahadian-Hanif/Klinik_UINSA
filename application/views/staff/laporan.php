

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Laporan</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Kunjungan bulanlalu -->
            <?php foreach($pemasukan_bln_ini as $d):?>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pemasukan (perbulan)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.<?php echo number_format($d->total, 2, ".", ",");?>,-</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach;?>

            <!-- Earnings (Monthly) Card Example -->
            <?php foreach($pemasukan_thn_ini as $d):?>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemasukan (pertahun)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.<?php echo number_format($d->total, 2, ".", ",");?>,-</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach;?>

            <!-- Kunjungan bulan ini -->
            <?php foreach($bulan_ini as $d):?>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pengunjung (perbulan)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $d->bulan;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach;?>
            

            <!-- Pending Requests Card Example -->
            <?php foreach($bulan_ini as $d):?>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Pengunjung (pertahun)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $d->bulan;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-clock fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach;?>
          </div>

          <!-- Content Row -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                           <div class="row">
                <div class="col-sm">
                  <button type="button" class="btn btn-info btn-sm">Excle
                    <i class="fas fa-fw fa-download"></i>
                  </button>
                </div>
              </div>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered display" width="100%" cellspacing="0" id="">
                  <thead>
                    <tr>
                      <th>Tanggal</th>
                      <th>NIM/NIP</th>
                      <th>Poli</th>
                      <th>Biaya</th>
                    </tr>
                  </thead>
                  <tbody id="show_data">

                  </tbody>
                </table>
              </div>
            </div>
            
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

  