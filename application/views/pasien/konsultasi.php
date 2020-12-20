 <!-- table data chat pasien -->
      <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center ">
            <div class="col-md-10 text-center heading-section ftco-animate border border-light">
              <h2 class="mb-3 ">Konsultasi dengan Dokter</h2>
              <table class="table table-hover text-left">
                <thead>
                  <tr>
                    <th scope="col" colspan="2">Poli</th>
                    <th scope="col">Dokter</th>
                  </tr>
                </thead>
                <?php
                        foreach($data->result_array() as $i):

                              $id=$i['id'];

                              $Nama=$i['nama'];

                              $posisi=$i['posisi'];

                  ?>
                <tbody class="text-left"> 
                  <tr>
                    <td colspan="2" ><?php echo $posisi;?></td>
                    <td><?php echo $Nama;?></td>
                    <td>
                      <a class="btn btn-success" href="<?php echo site_url('Chat/room_chat/'.$id);?>" role="button">Chat</a>
                    </td>
                  </tr>         
                </tbody>
                <?php endforeach;?>
              </table>
            </div>
          </div>
        </div>
      </section>