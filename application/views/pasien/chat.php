 <!-- table data chat pasien -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-3 mb-3 heading-section ftco-animate border border-light p-3">
                    <h6>Nama Dokter</h6>
                    <h5>Dr. Aditia Saputra</h5>
                    <h6>Poli Umum</h6>
                    <p>dr. Aditia Saputra adalah seorang Dokter Umum yang berpraktik di Rumah sakit Sutomo Surabaya.
                        Beliau merupakan alumni Universitas Indonesia.</p>
                    <h5>Jam Kerja</h5>
                    <p>Senin - Jumat : <span>08:00 - 17:00</span></p>
                </div>
                <div class="col-md-8 ml-3  heading-section ftco-animate border border-light">
                    <h2 class="mb-3 ">Konsultasi</h2>
                    <hr>
                    <!-- komentar -->
                    <div class="row mb-3">
                        <div class="col-2">
                            <img src="<?= base_url('assets'); ?>/images/about-2.jpg" alt="..."
                                class="rounded-circle img-fluid mr-3 float-right komen-image">
                        </div>
                        <div class="col posisi-image">
                            <h6> dr. Aditia Saputra
                                <br> <small> 2 Sep 2020</small>

                            </h6>
                            <p>Anda tidak sakit anda hanya malas</p>
                        </div>
                    </div>

                    <hr>
                    <!-- Kirim Komentar -->
                    <div class="row">
                        <div class="col-2">
                            <img src="<?= base_url('assets'); ?>/images/person_2.jpg" alt="..."
                                class="rounded-circle img-fluid mr-3 float-right komen-image">
                        </div>
                        <div class="col posisi-image">
                            <div class="form-group pr-2">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-10">
                                            <input type="text" class="form-control" id="isi_komen" name="isi_komen"
                                                placeholder="Tulis Komentar">
                                            <input type="text" id="id_progress" name="id_progress" value="" hidden>

                                            <input type="text" id="id_target" name="id_target" value="" hidden>
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