<!DOCTYPE html>
<html lang="en">

<head>
    <title>Klinik UINSA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--      <meta http-equiv="refresh" content="10" /> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/animate.css">

    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/magnific-popup.css">

    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/aos.css">

    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/ionicons.min.css">

    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/jquery.timepicker.css">


    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/icomoon.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo site_url('Profile');?>">
                <img src="<?= base_url('assets'); ?>/img/logo_sikuin.png" width="180" height="50"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-person"></span> Silvia
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item active"><a href="<?php echo site_url('Profile');?>" class="nav-link"> <span class="icon-person"></span> Profil</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('Chat');?>" class="nav-link"><span class="icon-chat"></span> Konsultasi </a></li>
                      <li class="nav-item"><a href="<?php echo site_url('Welcome/logout');?>" class="nav-link"><span class="ion-ios-log-out"></span> Keluar</a></li>
                      <li class="nav-item cta"><a href="" class="btn btn-outline-primary ml-1" data-toggle="modal" data-target="#modalRequest"><span>Ambil Nomer Antrian</span></a></li>
                    </ul>
                  </div>
        </div>
    </nav> 
 <!-- table data chat pasien -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center ">
                <?php foreach($data as $d): ?>
                <div class="col-md-3 mb-3 heading-section ftco-animate border border-light p-3">
                    <h6>Nama Dokter</h6>
                    <h5><?php echo $d->nama;?></h5>
                    <h6><?php echo $d->posisi;?></h6>
                    <p>dr. Aditia Saputra adalah seorang Dokter Umum yang berpraktik di Rumah sakit Sutomo Surabaya.
                        Beliau merupakan alumni Universitas Indonesia.</p>
                    <h5>Jam Kerja</h5>
                    <p>Senin - Jumat : <span>08:00 - 17:00</span></p>
                </div>
                <?php endforeach;?>
                <div class="col-md-8 ml-3  heading-section ftco-animate border border-light">
                    <h2 class="mb-3 ">Konsultasi</h2>
                    <hr>
                    <!-- komentar -->
                    <?php foreach($data2 as $d): ?>
                    <div class="row mb-3">
                        <div class="col-2">
                            <img src="<?= base_url('assets'); ?>/images/blankprofile.png" alt="..."
                                class="rounded-circle img-fluid mr-3 float-right komen-image">
                        </div>     
                        <div class="col posisi-image">
                            <h6><strong>
                                <?php if($d->pengirim == $this->session->userdata('nama')){
                                    echo 'Saya';
                            } else {echo $d->pengirim;}?></strong>
                                <br> <small> <?php echo date('d M Y H:i', strtotime($d->waktu));?></small>

                            </h6>
                            <p><?php echo $d->cht;?></p>
                        </div>
                    </div>
                    <?php endforeach;?>
                    <hr>
                    <!-- Kirim Komentar -->
                    <div class="row">
                        <div class="col-2">
                            <img src="<?= base_url('assets'); ?>/images/blankprofile.png" alt="..."
                                class="rounded-circle img-fluid mr-3 float-right komen-image">
                        </div>
                        <div class="col posisi-image">
                            <div class="form-group pr-2">
                                <form action="<?php echo base_url().'Chat/kirim'; ?>" method="post">
                                    <div class="row">
                                        <div class="col-10">
                                            <input type="text" class="form-control" placeholder="Ketik Pesan
                                            " name="cht" autocomplete="off">
                                            <div class="form-group">
                                                    <label for="exampleFormControlFile1">Lampiran</label>
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                        </div>
                                        
                                        <div class="col-2">
                                            <button class="btn btn-success" type="submit">Kirim</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END Kirim Komentar -->

                </div>
            </div>
        </div>
    </section>