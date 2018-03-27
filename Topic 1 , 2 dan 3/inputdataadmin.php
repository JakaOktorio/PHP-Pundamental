<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Halaman Tambah Admin</title>
        <link rel="icon" href="asset/images/Jaka Oktorio.jpg">
        <link href="asset/css/bootstrap.min.css" rel="stylesheet">
        <link href="asset/css/font-awesome.min.css" rel="stylesheet">
        <link href="asset/css/datepicker3.css" rel="stylesheet">
        <link href="asset/css/styles.css" rel="stylesheet">
        <link href="asset/https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
                                        <a class="navbar-brand fa fa-home" href="home.php"><span> Kunjungi Situs</span></a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">0</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
			
							
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">0</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 0 New Message
									
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 0 New Likes
									
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 0 New Followers
									
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="asset/images/Jaka Oktorio.jpg" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Jaka Oktorio</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
                    <li class="active"><a href="dasboard.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="widgets.php"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
                        <li><a href="inputdataadmin.php"><em class="fa fa-edit">&nbsp;</em> Tambah Admin</a></li>
                        <li><a href="post.php"><em class="fa fa-clone">&nbsp;</em> Post</a></li>
			<li><a href="pengaturan.php"><em class="fa fa-toggle-off">&nbsp;</em> Pengaturan</a></li>
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Keluar</a></li>
		</ul>
	</div>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Tambah Admin</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tambah Admin</h1>
			</div>
		</div><!--/.row-->
				<div class="panel panel-default">
					<div class="panel-heading">Masukkan Data Admin</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form">
								<div class="form-group">
									<label>Username</label>
                                                                        <input type="text" class="form-control" placeholder="Username">
								</div>
                                                                <div class="form-group">
									<label>Full Name</label>
                                                                        <input type="text" class="form-control" placeholder="Full Name">
								</div>
								<div class="form-group">
									<label>Password</label>
                                                                        <input type="password" class="form-control" placeholder="Password">
								</div>
                                                                <div class="form-group">
									<label>Email</label>
                                                                        <input type="email" class="form-control" placeholder="Email">
								</div>
                                                                <div class="form-group">
									<label>NO Telpon</label>
                                                                        <input type="number" class="form-control" placeholder="No Telpon">
								</div>
                                                                <div class="form-group">
									<label>Baned</label>
                                                                        <input type="text" class="form-control" placeholder="Baned">
								</div>
                                                                <div class="form-group">
									<label>LoginTime</label>
                                                                        <input type="datetime-local" class="form-control" placeholder="LoginTime">
								</div>
                                                                <div class="form-group">
									<label>Akses</label>
									<input class="form-control" placeholder="Akses">
								</div>
								<div class="form-group checkbox">
									<label>
										<input type="checkbox">Ingat Saya
									</label>
								</div>
								<div class="form-group">
									<label>Masukkan File</label>
									<input type="file">
									<p class="help-block">Maxsimal ukuran file 2 Mbps</p>
								</div>
									<button type="submit" class="btn btn-primary">Simpan</button>
									<button type="reset" class="btn btn-warning">Reset</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<p class="back-link">@Copyright 2018 by <a href="https://www.facebook.com/JakaOktorio24">Jaka Oktorio</a></p>
			</div>
		</div>
	</div>
	
<script src="js/jquery-1.11.1.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
<script src="asset/js/chart.min.js"></script>
<script src="asset/js/chart-data.js"></script>
<script src="asset/js/easypiechart.js"></script>
<script src="asset/js/easypiechart-data.js"></script>
<script src="asset/js/bootstrap-datepicker.js"></script>
<script src="asset/js/custom.js"></script>
	
</body>
</html>
