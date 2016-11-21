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
        Input Data Sekertaris Kepala Perwakilan
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
                  <label>Pemberi Disposisi</label>
                  <select class="form-control">
                    <option>Kepala Perwakilan</option>
                    <option>Kepala Grup</option>
                    <option>Kepala Divisi</option>
                  </select>
                </div>                            
                <div class="form-group">
                  <label>Tanggal Keluar Kepala Perwakilan</label>
                  <input type="date" class="form-control">                
                </div>

              </div>

              <div class="col-xs-6">
                <div class="form-group">
                  <label>Tindak Lanjut</label>
                  <select class="form-control">
                    <option>Perlu</option>
                    <option>Tidak Perlu</option>
                  </select>
                </div>
                <div class="form-group">
                <div class="form-group">
                  <label>Disposisi Divisi/Penugasan</label>
                  <select class="form-control">
                    <option>DAEK</option>
                    <option>DPE</option>
                    <option>DSPUR</option>
                    <option>ICO</option>
                    <option>IPEBI</option>
                    <option>PM</option>
                    <option>CP</option>
                  </select>
                </div>     
                </div>
              </div>

              <div class="col-xs-6">
                <div class="form-group">
                  <label>Arahan</label>
                  <select class="form-control">
                    <option>Setuju</option>
                    <option>Tolak</option>
                    <option>Untuk diteliti dan pendapat</option>
                    <option>Untuk diketahui</option>
                    <option>Untuk diselesaikan sesuai ketentuan yang berlaku</option>
                    <option>Sesuai catatan</option>
                    <option>Untuk perhatian</option>
                    <option>Untuk diedarkan</option>
                    <option>Untuk dijawab</option>
                    <option>Untuk diperbaiki</option>
                    <option>Untuk dibicarakan dengan saya</option>
                    <option>Untuk dibicarakan bersama</option>
                    <option>Untuk diingatkan</option>
                    <option>Untuk disimpan</option>
                    <option>Untuk disiapkan</option>
                    <option>Untuk dijadwalkan</option>
                    <option>Untuk dihadiri/diwakili</option>
                    <option>Dokumen asli kepada ...</option>
                  </select>
                </div>              
                <div class="form-group">                  
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
