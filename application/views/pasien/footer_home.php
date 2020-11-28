<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">KlinikUINSA.</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Features</a></li>
                <li><a href="#" class="py-2 d-block">Projects</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Office</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.3181070221244!2d112.73313228951956!3d-7.323266251803042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb6bfe974011%3A0x9719cd6782597849!2sSport%20Center%20UIN%20Sunan%20Ampel%20Surabaya!5e0!3m2!1sid!2sid!4v1605924834798!5m2!1sid!2sid" width="200" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> KlinikUINSA</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <!-- Modal -->
  <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalRequestLabel">Masuk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo site_url('Welcome/profile');?>">
            <div class="form-group">
              <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
              <input type="text" class="form-control" id="appointment_nim" placeholder="NIM">
            </div>
            <div class="form-group">
              <!-- <label for="appointment_email" class="text-black">Email</label> -->
              <input type="password" class="form-control" id="appointment_pass" placeholder="Kata sandi">
            
            <div class="form-group mt-4">
              <input type="submit" value="Masuk" class="btn btn-primary">
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