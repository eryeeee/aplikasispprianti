<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin SPP - Data Petugas</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url();?>bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url();?>bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper"style="background:#0f6949;">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <?php $this->load->view('v_topmenu'); ?>	
            <!-- /.navbar-top-links -->

            <?php $this->load->view('v_sidemenu'); ?>	
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper" style="background:#abd6c7;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Petugas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
					<a href="<?php echo site_url('datapetugas/form');?>" class="btn btn-primary">+Tambah</a><br><br>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Petugas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Nama Petugas</th>
                                            <th>Level</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$no=1;
									foreach($semua->result_array() as $d){
								?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no;?></td>
                                            <td><?php echo $d['username'];?></td>
                                            <td><?php echo $d['nama_petugas'];?></td>
											<td><?php echo $d['level'];?></td>
                                            <td class="center">
												<div class="tooltip-demo">
													<a href="<?php echo site_url('datapetugas/formedit/'.$d['id_petugas']);?>">
													<span class='glyphicon glyphicon-edit' data-toggle='tooltip' data-placement='top' title='Ubah'></span></a>
                                                <a href="<?php echo site_url('datapetugas/hapus/' . $d['id_petugas']); ?>">
                                                    <span class='glyphicon glyphicon-remove' data-toggle='tooltip' data-placement='top' title='Hapus'></span>
                                                    </a>
                                                </div>
											</td>
                                        </tr>
								<?php
									$no++;
									}
								?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				<div class="col-lg-6"></div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url();?>bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>dist/js/sb-admin-2.js"></script>
	
	<!-- Page-Level Demo Scripts - Notifications - Use for reference -->
    <script>
		// tooltip demo
		$('.tooltip-demo').tooltip({
			selector: "[data-toggle=tooltip]",
			container: "body"
		})

		// popover demo
		$("[data-toggle=popover]")
			.popover()
    </script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
		$(document).ready(function() {
			$('#dataTables-example').DataTable({
					responsive: true
			});
		});
    </script>

</body>

</html>