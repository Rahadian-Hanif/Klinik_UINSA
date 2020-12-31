<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
          <?php if ($this->session->has_userdata('berhasil')) { ?>
                        <div class="alert alert-success" role="alert">
                          Pendaftaran berhasil klik <a href="<?php echo site_url('Profile/print');?>" class="alert-link" target="_blank">Disinik</a> untuk cetak struk
                        </div>

                    <?php } else if ($this->session->has_userdata('error')){?>
                        <div class="alert alert-danger " role="alert">
                          <?php echo $this->session->flashdata('error');?>
                        </div>
                    <?php } ?>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?= base_url('assets'); ?>/img/user_vector.png" alt="Admin" class="pt-3 pb-3"  width="237">
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                   
                    <h5 class="text-secondary text-primary">Riwayat Penyakit</h5>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><?php echo $this->session->userdata('riwayat'); ?></h6>
                  </li>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Nama Lengkap</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $this->session->userdata('nama'); ?>
                        </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">NIM / NIP</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $this->session->userdata('nim_nip'); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Tanggal Lahir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo date('d F Y', strtotime($this->session->userdata('tgl_lahir'))); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Alamat</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $this->session->userdata('alamat'); ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-body">
                <div class="row">
                                <div class="col-8">
                                    <h4 class="mb-3 text-primary">Riwayat Kunjungan</h4>
                                </div>
                                <div class="col-4">
                                    <a class="btn btn-outline-primary" href="<?php echo site_url('Profile/print');?>" target="_blank"><span class="oi oi-data-transfer-download "></span> Cetak Antrian</a>
                                </div>  
                            </div>
                <table class="table table-hover">
                                <thead>
                                    <tr class="bg-light">
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Kode Antrian</th>
                                    </tr>
                                </thead>
                                <?php foreach($data as $d):?> 
                                <tbody class="text-left">

                                    <td><?php echo $d->tanggal;?></td>
                                    <td><?php echo $d->antrian;?></td>
                                    <td><?php echo $d->status;?></td>                                  
                                </tbody>
                                <?php endforeach;?>
                            </table>
                            
                </div>
              </div>

              
              <div class="row gutters-sm">
                <?php
                        foreach($data2->result_array() as $i):

                              $id=$i['id'];

                              $Nama=$i['nama'];

                              $posisi=$i['posisi'];

                  ?>

                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?= base_url('assets'); ?>/img/doctor_vector.png" alt="Admin" width="150">
                    <div class="mt-3">
                      <h4><?php echo $Nama;?></h4>
                      <p class="text-secondary mb-1"><?php echo $posisi;?></p>
                      <p class="text-muted font-size-sm">Senin - Jumat | 07:00 - 15:00</p>
                      <a href="<?php echo site_url('Chat/room_chat/'.$id);?>"><button class="btn btn-primary" >Konsultasi</button></a>
                    </div>
                  </div>
                    </div>
                  </div>
                </div>

                <?php endforeach;?>
              </div>

            </div>
          </div>
        </div>
    </div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
    
</script>