<!-- Modal -->
    <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRequestLabel">Ambil Nomer Antrian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url().'Profile/ambil_antrian'; ?>" class="appointment-form" method="post">
                        <div class="row">
                          <div class="col-sm-7">
                            <div class="form-group">
                                <div class="icon"><span class="icon-user"></span></div>
                                  <input type="text" class="form-control" id="appointment_name" placeholder="Nim" name="nim" value="<?php echo $this->session->userdata('nim_nip'); ?>">
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-group">
                                <div class="icon"><span class="ion-ios-calendar"></span></div>
                              <input type="text" class="form-control appointment_date" placeholder="Date" name="tanggal" value="<?php echo date("m/d/Y");?>">
                            </div>    
                          </div>
                        </div>       
                        <div class="form-group">
                        <button class="btn btn-primary" type="submit">Mengambil Nomer Antrian</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script src="<?= base_url('assets'); ?>/js/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/popper.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/jquery.easing.1.3.js"></script>
    <script src="<?= base_url('assets'); ?>/js/jquery.waypoints.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/jquery.stellar.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/aos.js"></script>
    <script src="<?= base_url('assets'); ?>/js/jquery.animateNumber.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/bootstrap-datepicker.js"></script>
    <script src="<?= base_url('assets'); ?>/js/jquery.timepicker.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/scrollax.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/main.js"></script>

</body>

</html>