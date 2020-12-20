

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Chat</h1>
          </div>

          <!-- Content Row -->
          <table class="table">
            <thead>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($data as $d): ?>
              <tr>
                <td><?php echo $d->pasien_nip_nim;?></td>
                <td><?php echo $d->nama;?></td>
                <td><a class="btn btn-success rounded-pill" href="<?php echo site_url('staf_chat/room_chat');?>" role="button">Chat</a>
                </td>
              </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

  