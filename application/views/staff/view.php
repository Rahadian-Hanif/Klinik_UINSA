

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row">
            <div class="col-8">
              
              <div class="row">
                <div class="col-9">
                  <a class="btn btn-light" href="<?php echo site_url('Staf_rekam_medis');?>" role="button">Back</a>
                </div>
                <div class="col">
                  <a class="btn btn-info rounded" href="#tambah" data-toggle="modal" data-target="#tambah">
                    <i class="fas fa-fw fa-plus"></i>Tambah
                  </a>
                </div>
              </div>
              <div class="card shadow p-3 mb-5 mt-3 bg-white rounded">  
              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Tanggal Periksa</th>
                      <th scope="col">Penanganan</th>
                      <th scope="col">Diagnosa</th>
                      <th scope="col">Poli</th>
                      <th scope="col">Hapus</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        foreach($data as $d):
                    ?>
                    <tr>
                      <td><?php echo date('d/m/Y',strtotime($d->tanggal));?></td>
                      <td><?php echo $d->penanganan;?></td>
                      <td><?php echo $d->diagnosis;?></td>
                      <td><?php echo $d->poli;?></td>
                      <td>
                        <a href="#Hapus" data-toggle="modal" data-target="#hapus<?php echo $d->id;?>"><i class="fas fa-fw fa-trash-alt"></i></a>
                      </td>
                    </tr>
                  </tbody>
                  <?php endforeach;?>
              </table>
              </div>
            </div>
            <div class="col">
              <div class="card shadow" style="width: 12rem;">
                <?php
                        foreach($data2 as $d):
                    ?>
                <div class="card-body">
                  <h5 class="card-title"><?php echo $d->nama;?></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Lahir : <?php echo date('d/m/Y',strtotime($d->tgl_lahir));?></h6>
                  <p class="card-text">Riwayat : <br>
                  <?php echo $d->riwayat;?></p>
                </div>
                <?php endforeach;?>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <!-- Modal Hapus -->
      <?php
        foreach($data as $d):
      ?>
      <div class="modal fade" id="hapus<?php echo $d->id;?>" tabindex="-1" role="dialog" aria-labelledby="hapus" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Menghapus Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Apa anda yakin akan menghapus record ini ?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="<?php echo site_url('Staf_rekam_medis/hapus/'.$d->id);?>" role="button">Hapus</a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach;?>
      <!-- Modal Tambah -->
      <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambah" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?php echo base_url().'Staf_rekam_medis/tambah'; ?>" method="post">
            <div class="modal-body form-group">
              <div class="form-group">
                <input type="text" class="datepicker border border-dark" name="tanggal" autocomplete="off" value="<?php echo date("m/d/Y");?>">
                <i class="fa fa-calendar-alt icon"></i>
                 <script type="text/javascript">
                  $('.datepicker').datepicker();
                 </script>
              </div>
              <div class="form-group">
                <label for="penanganan">Penanganan</label>
                <textarea class="form-control border border-dark" id="penanganan" rows="3" name="penanganan"></textarea>
              </div>
              <div class="form-group">
                <label for="diagnosis">Diagnosis</label>
                <textarea class="form-control border border-dark" id="diagnosis" rows="3" name="diagnosis"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
          </div>
        </div>
      </div>