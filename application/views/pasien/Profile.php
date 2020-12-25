

    <!-- table data chat pasien -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-3 text-center">
                    <img src="<?= base_url('assets'); ?>/images/blankprofile.png" style="width: 200px; height: 200px;" alt="">
                </div>
                <div class="col-md-8  heading-section ftco-animate ">

                    <?php if ($this->session->has_userdata('berhasil')) { ?>
                        <div class="alert alert-success" role="alert">
                          Pendaftaran berhasil klik <a href="<?php echo site_url('Profile/print');?>" class="alert-link" target="_blank">Disinik</a> untuk cetak struk
                        </div>

                    <?php } else if ($this->session->has_userdata('error')){?>
                        <div class="alert alert-danger " role="alert">
                          <?php echo $this->session->flashdata('error');?>
                        </div>
                    <?php } ?>
                    
                    <div class="pricing-entry pb-5 ">
                        <div>
                            <p><span class="price">Profil Saya</span></p>
                        </div>
                        <ul>
                            <div class="row">
                                <div class="col-3">
                                    <li>Nim/Nip</li>
                                    <li>Nama</li>
                                    <li>Tanggal Lahir</li>
                                    <li>Riwayat penyakit</li>
                                </div>
                                <div class="col">
                                    <li><?php echo $this->session->userdata('nim_nip'); ?></li>
                                    <li><?php echo $this->session->userdata('nama'); ?></li>
                                    <li><?php echo date('d F Y', strtotime($this->session->userdata('tgl_lahir'))); ?></li>
                                    <li><?php echo $this->session->userdata('alergi'); ?></li>
                                </div>
                            </div>
                        </ul>
<!--                         <p class="button text-center"><a href="#"
                                class="btn btn-primary btn-outline-primary px-4 py-3">Edit Profil</a></p> -->
                    </div>
                    <div class="row ">
                        <div class="col-md-12 heading-section ftco-animate border border-light mt-5">
                            <div class="row">
                                <div class="col-8">
                                    <h4 class="mb-3 text-primary">Riwayat Kunjungan</h4>
                                </div>
                                <div class="col-4">
                                    <a href="<?php echo site_url('Profile/print');?>" target="_blank"><span class="oi oi-data-transfer-download"></span> Cetak Antrian</a>
                                </div>  
                            </div>
                                     
                            <table class="table table-hover">
                                <thead>
                                    <tr>
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
                </div>
            </div>
        </div>
    </section>