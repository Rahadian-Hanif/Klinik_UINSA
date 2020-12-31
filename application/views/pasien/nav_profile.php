<!DOCTYPE html>
<html lang="en">

<head>
    <title>Klinik UINSA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- <meta http-equiv="refresh" content="10" /> -->
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
    <style type="text/css">
        body{
    margin-top:90px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding-top: 50px;
    padding: 15px;
}
.card {
    box-shadow: 0 1px 6px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.09);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

    </style>
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
                      <li class="nav-item active mr-2"><a href="<?php echo site_url('Profile');?>" class="nav-link"> <span class="icon-person"></span> Profil</a></li>
                      <li class="nav-item mr-2"><a href="<?php echo site_url('Welcome/logout');?>" class="nav-link"><span class="ion-ios-log-out"></span> Keluar</a></li>
                      <li class="nav-item cta"><a href="" class="btn btn-outline-primary ml-1" data-toggle="modal" data-target="#modalRequest"><span>Ambil Nomer Antrian</span></a></li>
                    </ul>
                  </div>
        </div>
    </nav>