<footer class="main-footer">
    
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url();?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/assets/dist/js/adminlte.min.js"></script>

<script src="<?php echo base_url();?>/assets/js/app.js"></script>

<script>

var id_p;
var link;
  $('#proyectorModal').on('show.bs.modal', function (event) {
    link = $(event.relatedTarget)
    id_p = link.data('id')
    var name = link.data('name')
    var modal = $(this)
    modal.find('.modal-title span').text(name)
  });

</script>

</body>
</html>