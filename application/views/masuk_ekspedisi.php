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
        Input Data Ekspedisi
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
                  <label>Dari</label>
                  <input type="text" class="form-control">
                </div>                            
                <div class="form-group">
                  <label>Nomor Surat</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-xs-6">        
                <div class="form-group">
                  <label>Tanggal Surat</label>
                  <input type="date" class="form-control">
                </div>
                <div class="form-group">
                  <label>Perihal</label>
                  <input type="text" class="form-control">
                </div>
              </div>

              <div class="col-xs-6">        
                <div class="form-group">
                  <label>Tanggal Terima Surat dan Keluar Ekspedisi</label>
                  <input type="date" class="form-control">
                </div>  
              </div>

              <div class="col-xs-6">                                                    
                <div class="form-group">
                  <label for="exampleInputFile">File Surat</label>
                  <input type="file" id="exampleInputFile">                  
                </div>
              </div>

              <div class="col-xs-6">                                                    
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Kirim</button>
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
