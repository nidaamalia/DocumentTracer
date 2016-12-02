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
                  <td><?php echo $dm['nama']?></td>
                  <td><?php echo $dm['role']?></td>
                  <td>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editAkun<?php echo $dm['id']?>">Edit</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusAkun<?php echo $dm['id']?>">Hapus</button>
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
            <form role="form" action="<?php echo base_url(). 'akun/createAkun';?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama">
                </div>           
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username">
                </div>   
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password">
                </div>                                                                   
                <div class="form-group">
                  <label>Jabatan</label>
                  <select class="form-control" name="role">
                    <option>Sekertaris Kepala Perwakilan</option>
                    <option>Sekertaris Kepala Divisi</option>
                    <option>Sekertaris Kepala Grup</option>
                  </select>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" value="Tambah">Tambah</button>
              </div>
            </form>                
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.MODAL TAMBAH -->


  <!-- MODAL EDIT -->
  <div class="container">
    <!-- Modal -->
    <?php foreach($data as $dm){?>
    <div class="modal fade" id="editAkun<?php echo $dm['id']?>" role="dialog">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit Akun</h4>
          </div>
          <div class="modal-body">
            <form role="form" action="<?php echo base_url(). 'akun/updateAkun';?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="hidden" class="form-control" name="id" value="<?php echo $dm['id']?>">
                  <input type="text" class="form-control" name="nama" value="<?php echo $dm['nama']?>">
                </div>           
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" value="<?php echo $dm['username']?>">
                </div>   
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" value="<?php echo $dm['password']?>">
                </div>                                                                   
                <div class="form-group">
                  <label>Jabatan</label>
                  <select class="form-control" name="role">
                    <?php echo "<option value='".$dm['role']."'>".$dm['role']."</option>"?>
                    <option>Sekertaris Kepala Perwakilan</option>
                    <option>Sekertaris Kepala Divisi</option>
                    <option>Sekertaris Kepala Grup</option>
                  </select>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success" value="Update">Edit</button>
              </div>
            </form>            
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php }?>
  <!-- /.MODAL TAMBAH -->

  <!-- MODAL HAPUS -->
  <div class="container">
    <!-- Modal -->
    <?php foreach($data as $dm){?>
    <div class="modal fade" id="hapusAkun<?php echo $dm['id']?>" role="dialog">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Hapus Akun</h4>
          </div>
          <form role="form" action="<?php echo base_url(). 'akun/hapusAkun/' .$dm['id'];?>" method="post">
          <input type="hidden" class="form-control" name="id" value="<?php echo $dm['id']?>">
            <div class="modal-body">
            <p>Apakah Anda yakin akan menghapus akun ini?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-danger" value="Hapus">Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php }?>
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
