<?php
include'connect.php';
if(isset($_POST['sub'])){
    $t=$_POST['text'];
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $c=$_POST['city'];
    $g=$_POST['gen'];
    if($_FILES['f1']['name']){
    move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
    $img="image/".$_FILES['f1']['name'];
    }
    else{
        $img=$_POST['img1'];
    }
    $i="update prod set name='$t',username='$u',password='$p',city='$c',gender='$g',image='$img' where id='$_SESSION[id]'"; // ACHO Q ESSE PROD TINHA Q SER REG
    mysqli_query($con, $i);
    header('location:profile.php');
}
      $s="select*from reg where id='$_SESSION[id]'";
      $qu= mysqli_query($con, $s);
      $f=mysqli_fetch_assoc($qu);
    ?>

    <?php
      $j="select*from prod";
      $qe= mysqli_query($con, $j);
      $h=mysqli_fetch_assoc($qe);
    ?>

	<?php
      $jp="select*from pedidos";
      $qep= mysqli_query($con, $jp);
      $hp=mysqli_fetch_assoc($qep);
    ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Pedidos da loja</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">


        <link rel="stylesheet" href="css/icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="css/icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/leaflet.css" />
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="css/leaflet.ie.css" />
		<![endif]-->
		<link rel="stylesheet" href="css/main.css">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>


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
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
<?php
/*
        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
	        <div class="container">
	        	<div class="menuextras">
					<div class="extras">
						<ul>
							<li class="shopping-cart-items"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> <a href="page-shopping-cart.php"><b>3 items</b></a></li>
							<li>
								<div class="dropdown choose-country">
									<a class="#" data-toggle="dropdown" href="#"><img src="img/flags/br.png" alt="Brasil"> BR</a>
								</div>
							</li>
			        		<li><a href="page-login.php">Login</a></li>
			        	</ul>
					</div>
		        </div>
		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="index.php"><img src="img/logoout.png" alt="Multipurpose Twitter Bootstrap Template"></a></li>
						<li class="active">
							<a href="index.php">Pagina Inicial</a>
						</li>
						<li>
							<a href="page-portfolio-3-columns-1.php">Roupas</a>
						</li>
						

<!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --><!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- -->

						<li class="has-submenu">
							<a href="#">Navegar</a>
							<div class="mainmenu-submenu">
								<div class="mainmenu-submenu-inner"> 
									<div>
										<h4>Sobre nós</h4>
										<ul>
											<li><a href="page-team.php">Nosso time</a></li> <!-- --> <!-- -->
											<li><a href="page-terms-privacy.php">Termos e Privacidade</a></li> <!-- --> <!-- -->
											<li><a href="page-faq.php">Perguntas Frequentes</a></li> <!-- --> <!-- -->
											<li><a href="page-testimonials-clients.php">Avaliações de clientes</a></li> <!-- --> <!-- -->
										</ul>
									</div>
									<div>
										<h4>Our Work (Portfolio)</h4>
										<ul>
										<!--	<li><a href="page-portfolio-2-columns-1.php">Listagem de produtos  ( 1 )</a></li> -->
											<li><a href="page-portfolio-3-columns-1.php">Listagem de produtos ( 2 )</a></li><!-- --> <!-- -->
										<!--	<li><a href="page-portfolio-item.php">Descricao Produto</a></li>  -->
											<li><a href="page-password-reset.php">Resetar senha</a></li> <!-- --> <!-- -->
										</ul>
									</div>
									<div>
										<h4>eShop</h4>
										<ul>
											<li><a href="page-products-3-columns.php">Products listing (3 Columns)</a></li> <!-- --> <!-- -->
											<li><a href="page-products-slider.php">Products Slider</a></li> <!-- --> <!-- -->
											<li><a href="page-product-details.php">Product Details</a></li><!-- --> <!-- -->
											<li><a href="page-shopping-cart.php">Shopping Cart</a></li><!-- --> <!-- -->
										</ul>
										<h4>Blog</h4>
										<ul>
											<li><a href="page-blog-posts.php">Nossos Blogs</a></li><!-- --> <!-- -->
											<li><a href="page-blog-post-right-sidebar.php">Blog Single Post (Right Sidebar)</a></li><!-- --> <!-- -->
										</ul>
									</div>
								</div><!-- /mainmenu-submenu-inner -->
							</div><!-- /mainmenu-submenu -->
						</li>

<!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --><!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- -->

						<li>
							<a href="page-team.php">Nossa Equipe</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- / Navegation e logo fim -->
*/		
?>
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
                <a href="indexadm.php" class="nav-link">
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
                <a href="page-shopping-cart.php" class="nav-link active">
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
    <!-- NAV 2 -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12" >
						<center><h1 class="nav-link" data-widget="pushmenu">Pedidos da Loja</h1></center>
					</div>
				</div>
			</div>
		</div>
  <!-- NAV 2 -->
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- Action Buttons -->
						<div class="pull-right">
							<!-- <a href="#" class="btn btn-grey"><i class="glyphicon glyphicon-refresh"></i> UPDATE</a> -->
							<!-- <a href="#" class="btn"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> CHECK OUT</a> -->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
					<?php
						$sqp="select * from pedidos";
						$qep=mysqli_query($con,$sqp);
						while($hp=  mysqli_fetch_assoc($qep)){
					?>
						<!-- Shopping Cart Items -->
						<table class="shopping-cart">
							<!-- Shopping Cart Item -->
							<tr>
								<!-- Shopping Cart Item Image -->
								<td class="image"><a><img src="<?php echo $hp['image']?>" alt="Sem Foto"></a></td>
								
								<!-- Shopping Cart Item Description & Features -->
								<td>
									<div class="cart-item-title"><?php echo $hp['nome']?></div>
									<div class="feature">País: <b><?php echo $hp['pais']?></b></div>
									<div class="feature">Estado: <b><?php echo $hp['estado']?></b></div>
								</td>
								<!-- Shopping Cart Item Quantity -->
								<td>Endereço: <p></p><?php echo $hp['endereco']?></td>
								<!-- Shopping Cart Item Price -->
								<td>CEP:<?php echo $hp['cep']?><p></p>
								Identificação: <?php echo $hp['id']?>
								</td>
								<!-- Shopping Cart Item Actions -->
								<td>Telefone: <?php echo $hp['telefone']?></td>
								<!-- Shopping Cart Item Actions -->
								<td>Email: <p></p><?php echo $hp['email']?></td>
								<td class="actions">
									<a href="deletePedidos.php?id=<?php echo $hp['id']?>" class="btn btn-xs btn-grey"><i class="fas fa-trash"></i></a>
								</td>
							</tr>
							<!-- End Shopping Cart Item -->
						</table>
						<!-- End Shopping Cart Items -->
					<?php
              			}
              		?>
					</div>
				</div>
			</div>
		</div>
        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/jquery.sequence-min.js"></script>
        <script src="js/jquery.bxslider.js"></script>
        <script src="js/main-menu.js"></script>
        <script src="js/template.js"></script>

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