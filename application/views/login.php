<!DOCTYPE html>
<html>
<head>
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.css">
	<script type="text/javascript"></script>
</head>
<body class="hold-transition skin-blue">
	<div class="wrapper">
		<h1 class="text-center" style="color: #fafafa;">Selamat Datang di Document Tracer Bank Indonesia</h1>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="well well-sm">
					<form role="form" action="<?php echo base_url('login/loginAkun'); ?>" method="post">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" name="username" id="username" placeholder="Username">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-primary" style="margin-left: 345px;" value="Login">Submit</button>
					</form>	
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>

</body>
</html>