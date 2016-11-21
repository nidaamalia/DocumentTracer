<!DOCTYPE html>
<html>
<head>
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.css">

</head>
<body class="hold-transition skin-blue">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Input Data Sekertaris Kepala Divisi
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">        
          <div class="box">
            <!-- /.box-header -->
            <form role="form">

              <div class="box-body">

              <div class="col-xs-6">        
                <div class="form-group">
                  <label>Tanggal Keluar Kepala Divisi</label>
                  <input type="date" class="form-control">
                </div>
                <div class="form-group">
                  <label>Fungsi/Tim/Unit Pelaksana</label>
                  <select class="form-control">
                    <option>FSLA</option>
                    <option>FDSEK</option>
                    <option>FAES</option>
                    <option>FKKB</option>
                    <option>FPPU</option>
                    <option>UDU</option>
                    <option>ULAK</option>
                    <option>UPU</option>
                    <option>FPSPPUR</option>
                    <option>FKIPK</option>
                    <option>UOSP</option>
                    <option>FLAK</option>
                    <option>SDM</option>
                    <option>FPP</option>
                  </select>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
              </div>

              <div class="col-xs-6">        
                <div class="form-group">
                  <label>Batas Tindak Lanjut</label>
                  <input type="date" class="form-control">
                </div>
              </div>            

              </div>
              <!-- /.box-body -->

            </form>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>/assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>/assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>/assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>/assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
$(document).ready(function() {
    var table = $('#example1').dataTable({
                    scrollX : true,
                    scrollCollapse : true
                });
});
</script>
</body>
</html>
