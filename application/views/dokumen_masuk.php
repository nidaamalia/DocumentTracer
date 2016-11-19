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
        Dokumen
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Dari</th>
                  <th>No. Surat</th>
                  <th>Tanggal Surat</th>
                  <th>Perihal</th>
                  <th>Tanggal Terima Surat</th>
                  <th>Tanggal Keluar Ekspedisi</th>
                  <th>Pemberi Disposisi</th>
                  <th>Tindak Lanjut</th>
                  <th>Tanggal Keluar dari Kepala Perwakilan</th>
                  <th>Disposisi Divisi/Penugasan</th>
                  <th>Arahan</th>
                  <th>Tanggal Keluar dari Kepala Grup</th>
                  <th>Tanggal Keluar dari Kepala Divisi</th>
                  <th>Fungsi/Tim/Unit Pelaksana</th>
                  <th>Batas Tindak Lanjut</th> 
                  <th>Referensi Penyelesaian</th>
                  <th>Tanggal Penyelesaian</th>
                  <th>Status Penyelesaian</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($data as $dm){?>
                <tr>
                  <td><?php echo $dm['masuk_dari']?></td>
                  <td><?php echo $dm['no_surat']?>
                  </td>
                  <td><?php echo date("j F Y",strtotime($dm['tanggal_surat']))?></td>
                  <td><?php echo $dm['perihal']?></td>
                  <td><?php echo date("j F Y",strtotime($dm['tanggal_terima']))?></td>
                  <td><?php echo date("j F Y",strtotime($dm['keluar_ekspedisi']))?></td>
                  <td><?php echo $dm['pemberi_disposisi']?>
                  </td>
                  <td><?php echo $dm['tindak_lanjut']?></td>
                  <td><?php echo date("j F Y",strtotime($dm['keluar_perwakilan']))?></td>
                  <td><?php echo $dm['disposisi_divisi']?></td>
                  <td><?php echo $dm['arahan']?></td>
                  <td><?php echo date("j F Y",strtotime($dm['keluar_grup']))?>
                  </td>
                  <td><?php echo date("j F Y",strtotime($dm['keluar_divisi']))?></td>
                  <td><?php echo $dm['pelaksana']?></td>
                  <td><?php echo date("j F Y",strtotime($dm['batas']))?></td>     
                  <td><?php echo $dm['referensi']?></td>
                  <td><?php echo date("j F Y",strtotime($dm['tanggal_penyelesaian']))?></td>
                  <td><?php echo $dm['status']?></td>                
                </tr>
                <?php }?>
                </tbody>
              </table>
            </div>
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
