

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pembayaran</h1>
          </div>

          <?php if ($this->session->has_userdata('error_poli')) { ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo $this->session->flashdata('error_poli');?>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
          <?php }?>
          

          <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
              <?php foreach($data as $d):?>
              <form method="post" action="<?php echo site_url('Staf_pembayaran/update/'.$d->id);?>">               
                <div class="mb-3">
                  <label class="form-label">NIM/NIP</label>
                  <input class="form-control" readonly value="<?php echo $d->pasien_nim_nip;?>">
                </div>

                <div class="mb-3">
                  <label class="form-label">Penanganan</label>
                  <input class="form-control" readonly value="<?php echo $d->penanganan;?>">
                </div>
                <div class="mb-3">
                  <label class="form-label">Diagnosis</label>
                  <input class="form-control" readonly value="<?php echo $d->diagnosis;?>">
                </div>
                <div class=" mb-3">
                  <label class="form-label">Poli</label>
                  <div class="input-group mb-3">
                    <span class="input-group-text">Rp.</span>
                    <select class="custom-select" name="biaya">
                      <option selected>Pilih...</option>
                      <option value="20000">Poli Gigi</option>
                      <option value="15000">Poli Umum</option>
                    </select>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>                
              </form>
              <?php endforeach;?>
            </div>
          </div>

          
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

