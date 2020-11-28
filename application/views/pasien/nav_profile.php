<!DOCTYPE html>
<html lang="en">

<head>
    <title>DentaCare - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
            <a class="navbar-brand" href="<?php echo site_url('Welcome/profile');?>">
                <img src="<?= base_url('assets'); ?>/img/logo_sikuin.png" width="180" height="50"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-person"></span> Silvia
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item active"><a href="<?php echo site_url('Welcome/profile');?>" class="nav-link"> <span class="icon-person"></span> Profil</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('Welcome/konsultasi');?>" class="nav-link"><span class="icon-chat"></span> Konsultasi </a></li>
                      <li class="nav-item"><a href="" class="nav-link"><span class="ion-ios-log-out"></span> Keluar</a></li>
                      <li class="nav-item cta"><a href="" class="btn btn-outline-primary ml-1" data-toggle="modal" data-target="#modalRequest"><span>Ambil Nomer Antrian</span></a></li>
                    </ul>
                  </div>
        </div>
    </nav>