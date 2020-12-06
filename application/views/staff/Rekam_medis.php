

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Rekam Medis Pasien</h1>
          </div>

          <!-- Content Row -->
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">NIM/NIP</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alergi</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                        $n=1;
                        foreach($data->result_array() as $i):

                              $NIM=$i['nim_nip'];

                              $Nama=$i['nama'];

                              $alergi=$i['alergi'];

                  ?>
                <tr>
                  <th scope="row"><?php echo $n++;?></th>
                  <td><?php echo $NIM;?></td>
                  <td><?php echo $Nama;?></td>
                  <td><?php echo $alergi;?></td>
                  <td>
                    <a class="btn btn-success" href="<?php echo site_url('Staf_rekam_medis/view/'.$NIM);?>" role="button">View</a>
                  </td>
                </tr>
                <?php endforeach;?>
              </tbody>
          </table>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

  