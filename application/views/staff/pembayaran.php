

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pembayaran</h1>
          </div>

          <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
              <table class="table">
              <thead>
                <tr>
                  <th scope="col">NIM/NIP</th>
                  <th scope="col">Poli</th>
                  <th scope="col">Penanganan</th>
                  <th scope="col">Diagnosis</th>
                  <th scope="col">Pembayaran</th>                  
                </tr>
              </thead>
              <?php foreach($data as $d):?>
              <tbody>
                <tr>
                  <th><?php echo $d->pasien_nim_nip;?></th>
                  <td><?php echo $d->poli;?></td>
                  <td><?php echo $d->penanganan;?></td>
                  <td><?php echo $d->diagnosis;?></td>
                  <td>Rp. <?php echo $d->biaya;?></td>
                  <td><a class="btn btn-primary" href="<?php echo site_url('Staf_pembayaran/bayar/'.$d->id);?>" role="button">Bayar</a></td>
                </tr>
              </tbody>
              <?php endforeach;?>
            </table>
            </div>
          </div>

          
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

