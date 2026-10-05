<?php
    include 'connect.php';
    include 'checkLogin.php';
    $s="select*from reg where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);
    
    if(isset($_POST['sub'])){ }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pagina Inicial Admin</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/leaflet.css" />
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="css/leaflet.ie.css" />
		<![endif]-->
	      <link rel="stylesheet" href="css/main.css">

  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.css">

  <link rel="icon" href="BancoDeImagens/Logos/LogoColorida/(2) 500LogoColorida.png">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- NAV 2 -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12" >
						<center><h1 class="nav-link" data-widget="pushmenu">Produtos da Loja</h1></center>
					</div>
				</div>
			</div>
		</div>
  <!-- NAV 2 -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="indexadm.php" class="brand-link">
      <img src="BancoDeImagens/Logos/LogoPaleta/(1) 300LogoOFC.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Outwear</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img class="img-circle elevation-2" src="<?php echo $f['image']?>" alt="">
        </div>
        <span class="font-weight-light brand-link"><?php echo $f['name']?></span>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Pesquisar" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- -->

            <!-- 
            <a href="#" class="nav-link">
            <center>
            <img src="BancoDeImagens/Logos/LogoColorida/170bannercolorido.png" alt="AdminLTE Logo"  style="opacity: .8">
            </center>
            </a> 
            -->

            <li class="nav-item menu-is-opening menu-open">
            <a class="nav-link">
            <img src="BancoDeImagens/Logos/LogoColorida/35LogoColoridaEmPeOFC.png"  style="opacity: .8"> <i>--> ADMINISTRADOR</i>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="indexadm.php" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
              <p>Home Page</p>
            </a>
            </li>
            <li class="nav-item">
                <a href="profile.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
              <p>Perfil</p>
            </a>
            </li>
            <li class="nav-item">
                <a href="projects.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Produtos</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="usuarios.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuarios</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="page-shopping-cart.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pedidos</p>
              </a>
            </li>
          </li>
          <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
    
    <!-- EXIBICAO DE PRODUTOS --> <!-- EXIBICAO DE PRODUTOS --> <!-- EXIBICAO DE PRODUTOS --> <!-- EXIBICAO DE PRODUTOS --> <!-- EXIBICAO DE PRODUTOS -->

		<div class="section">
	    	<div class="container">
				<div class="row">
					<!-- ITEM PRIMARIO --> <!-- ITEM PRIMARIO --> <!-- ITEM PRIMARIO -->
						<?php
							$sq="select * from prod";
							$qe=mysqli_query($con,$sq);
							while($h=  mysqli_fetch_assoc($qe)){
						?>	
							<div class="col-md-4 col-sm-6">
								<div class="portfolio-item">
									<div class="portfolio-image">
										<a href="page-portfolio-item.php?id=<?php echo $h['id']?>"><img src="<?php echo $h['image']?>" alt="Project Name"></a>
									</div>
									<div class="portfolio-info-fade">
										<ul>
											<li class="portfolio-project-name"><?php echo $h['NomeProduto']?></li>
											<li><?php echo $h['CorProduto']?></li>
											<li><?php echo $h['PrecoProduto']?></li>
											<li class="read-more"><a href="page-portfolio-item.php?id=<?php echo $h['id']?>" class="btn">Compre</a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- ITEM PRIMARIO --> <!-- ITEM PRIMARIO --> <!-- ITEM PRIMARIO -->
						<?php
							}
						?>
				</div>
			</div>
		</div>
		<!-- EXIBICAO DE PRODUTOS --> <!-- EXIBICAO DE PRODUTOS --> <!-- EXIBICAO DE PRODUTOS --> <!-- EXIBICAO DE PRODUTOS --> <!-- EXIBICAO DE PRODUTOS -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="AdminLTE-3.2.0/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="AdminLTE-3.2.0/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="AdminLTE-3.2.0/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="AdminLTE-3.2.0/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="AdminLTE-3.2.0/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="AdminLTE-3.2.0/plugins/moment/moment.min.js"></script>
<script src="AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="AdminLTE-3.2.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-3.2.0/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="AdminLTE-3.2.0/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="AdminLTE-3.2.0/dist/js/pages/dashboard.js"></script>
</body>
</html>
