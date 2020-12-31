    <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Klinik UINSA 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ingin Meninggalkan Halaman ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Klik logout untuk meninggalkan halaman</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo site_url('staff/logout');?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->

  <script src="<?= base_url('assets'); ?>/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets'); ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>


  <script type="text/javascript">
    $(document).ready(function(){
        laporan();   //pemanggilan fungsi
        $('table.display').dataTable();
          
        //fungsi tampil barang
        function laporan(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>Staf_laporan/list',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].tanggal+'</td>'+
                                '<td>'+data[i].pasien_nim_nip+'</td>'+
                                '<td>'+data[i].poli+'</td>'+
                                '<td>'+data[i].biaya+'</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });

            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>Staf_rekam_medis/list',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].nim_nip+'</td>'+
                                '<td>'+data[i].nama+'</td>'+
                                '<td>'+data[i].riwayat+'</td>'+
                                '<td><a class="btn btn-success" href="<?php echo site_url()?>Staf_rekam_medis/view/'+data[i].nim_nip+'" role="button">View</a></td>'+
                                '</tr>';
                    }
                    $('#rekam_medis').html(html);
                }
 
            });

        }
 
    });
 
</script>
</body>

</html>
