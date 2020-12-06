

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pendaftaran</h1>
          </div>

          <!-- Content Row -->
          <form action="<?php echo base_url().'Staf_daftar/daftar'; ?>" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="NIM"><i class="fa fa-user-circle"></i> NIM/NIP</label>
                <input class="form-control border border-dark" id="NIM" style="width: 189px;" name="nim" autocomplete="off">   
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for=""><i class="fa fa-calendar-alt icon"></i> Tanggal</label><br>
                <input type="text" class="datepicker border border-dark" name="tanggal" autocomplete="off">            
                 <script type="text/javascript">
                  $('.datepicker').datepicker();
                 </script>
              </div>
            </div>
            <div class="form-group">
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
          </form>

          <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">NIM/NIP</th>
                  <th scope="col">No Antrian</th>
                  <th scope="col">Kode</th>
                  <th scope="col">Tanggal</th>
                </tr>
              </thead>
              <tbody>
                <?php
                        $n=1;
                        foreach($data->result_array() as $i):

                              $NIM=$i['pasien_nim_nip'];

                              $antrian=$i['no_pengunjung'];

                              $kode=$i['antrian'];

                              $tanggal=$i['tanggal'];

                  ?>
                <tr>
                  <th scope="row"><?php echo $n++;?></th>
                  <td><?php echo $NIM;?></td>
                  <td><?php echo $antrian;?></td>
                  <td><?php echo $kode;?></td>
                  <td><?php echo $tanggal;?></td>
                </tr>
                <?php endforeach;?>
              </tbody>
          </table>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
  