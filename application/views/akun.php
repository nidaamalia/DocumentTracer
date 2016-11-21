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
        Akun
      </h1>
    </section>
    <section class="content-header">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahAkun">Tambah Akun</button>
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
                  <th>Nama</th>
                  <th>Role</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($data as $dm){?>
                <tr>
                  <td><?php echo $dm['masuk_dari']?></td>
                  <td><?php echo $dm['no_surat']?></td>
                  <td>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editAkun">Edit</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusAkun">Hapus</button>
                  </td>                
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

  <!-- MODAL TAMBAH -->
  <div class="container">
    <!-- Modal -->
    <div class="modal fade" id="tambahAkun" role="dialog">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Tambah Akun</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control">
                </div>           
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control">
                </div>   
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control">
                </div>                                                                   
                <div class="form-group">
                  <label>Jabatan</label>
                  <select class="form-control">
                    <option>Sekertaris Kepala Perwakilan</option>
                    <option>Sekertaris Kepala Divisi</option>
                    <option>Sekertaris Kepala Grup</option>
                  </select>
                </div>
              </div>
            </form>                
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-primary">Tambah</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.MODAL TAMBAH -->


  <!-- MODAL EDIT -->
  <div class="container">
    <!-- Modal -->
    <div class="modal fade" id="editAkun" role="dialog">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit Akun</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control">
                </div>           
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control">
                </div>   
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control">
                </div>                                                                   
                <div class="form-group">
                  <label>Jabatan</label>
                  <select class="form-control">
                    <option>Sekertaris Kepala Perwakilan</option>
                    <option>Sekertaris Kepala Divisi</option>
                    <option>Sekertaris Kepala Grup</option>
                  </select>
                </div>
              </div>
            </form>                
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-success">Edit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.MODAL TAMBAH -->

  <!-- MODAL HAPUS -->
  <div class="container">
    <!-- Modal -->
    <div class="modal fade" id="hapusAkun" role="dialog">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Hapus Akun</h4>
          </div>
          <div class="modal-body">
          <p>Apakah Anda yakin akan menghapus akun ini?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-danger">Hapus</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.MODAL TAMBAH -->

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
