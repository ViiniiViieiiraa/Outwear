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
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Roupas Outwear</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/leaflet.css" />
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="css/leaflet.ie.css" />
		<![endif]-->
		<link rel="stylesheet" href="css/main.css">

		<!-- Css Styles -->
		<link rel="stylesheet" href="css2/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="css2/font-awesome.min.css" type="text/css">
		<link rel="stylesheet" href="css2/elegant-icons.css" type="text/css">
		<link rel="stylesheet" href="css2/magnific-popup.css" type="text/css">
		<link rel="stylesheet" href="css2/nice-select.css" type="text/css">
		<link rel="stylesheet" href="css2/owl.carousel.min.css" type="text/css">
		<link rel="stylesheet" href="css2/slicknav.min.css" type="text/css">
		<link rel="stylesheet" href="css2/style.css" type="text/css">

		<!-- Css Styles Purpose-->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/icomoon-social.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/leaflet.css" />
		<link rel="stylesheet" href="css/main.css">
		<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<link rel="icon" href="BancoDeImagens/Logos/LogoColorida/(2) 500LogoColorida.png">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
	        <div class="container">
	        	<div class="menuextras">
					<div class="extras">
						<ul>
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
						<li>
							<a href="index.php">Pagina Inicial</a>
						</li>
						<li class="active">
							<a href="page-portfolio-3-columns-1.php">Roupas</a>
						</li>
						

<!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --><!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- -->

<li class="has-submenu">
							<a href="#">Navegar</a>
							<div class="mainmenu-submenu">
								<div class="mainmenu-submenu-inner"> 
									<div>
										<h4>Navegação Facil</h4>
										<ul>
											<li><a href="index.php">Pagina Inicial</a></li><!-- --> <!-- -->
											<li><a href="page-portfolio-3-columns-1.php">Todas as roupas</a></li><!-- --> <!-- -->
											<li><a href="page-team.php">Nossa Equipe</a></li><!-- --> <!-- -->
										</ul>
									</div>
									<div>
										<h4>Sobre</h4>
										<ul>
											<li><a href="page-terms-privacy.php">Termos e Privacidade</a></li> <!-- --> <!-- -->
											<li><a href="page-faq.php">Perguntas Frequentes</a></li> <!-- --> <!-- -->
											<li><a href="page-testimonials-clients.php">Avaliações de clientes</a></li> <!-- --> <!-- -->
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
		<br></br>
		<center>
		<nav id="mainmenu" class="mainmenu">
			<ul>
				<li class="active">
					<a href="page-portfolio-3-columns-1.php" class="site-btn"><center>Todas as roupas</center></a>
				</li>
				<li>
					<a href="Camisetas.php" class="site-btn"><center>Camisetas</center></a>
				</li>
				<li>
					<a href="Moletons.php" class="site-btn"><center>Moletons</center></a>
				</li>
				<li>
					<a href="Calcas.php" class="site-btn"><center>Calças</center></a>
				</li>
				<li>					
					<a href="Shorts.php" class="site-btn"><center>Shorts</center></a>
				</li>
				<li>
					<a href="Sociais.php" class="site-btn"><center>Sociais</center></a>
				</li>
			</ul>
		</nav>
		</center>
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
										<a href="page-portfolio-item.php"><img src="<?php echo $h['image']?>" alt="Project Name"></a>
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

		<!-- BOTOES DE CLASSE --> <!-- BOTOES DE CLASSE --> <!-- BOTOES DE CLASSE --> <!-- BOTOES DE CLASSE --> <!-- BOTOES DE CLASSE -->
		
		<!-- BOTOES DE CLASSE --> <!-- BOTOES DE CLASSE --> <!-- BOTOES DE CLASSE --> <!-- BOTOES DE CLASSE --> <!-- BOTOES DE CLASSE -->

	<!-- Our Clients -->
		<div class="section">
	    	<div class="container">
	    		<h2>Nossos Patrocinadores</h2>
				<div class="clients-logo-wrapper text-center row">
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a><img src="img/logos/astroword.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a><img src="img/logos/chanel.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a><img src="img/logos/cactus.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a><img src="img/logos/dior.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a><img src="img/logos/gucci.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a><img src="img/logos/high.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a><img src="img/logos/lacoste.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a><img src="img/logos/levis.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a><img src="img/logos/vishfi.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a><img src="img/logos/nike.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a><img src="img/logos/overcome.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a><img src="img/logos/stassy.png" alt="Client Name"></a></div>
				</div>
			</div>
	    </div>
	<!-- End Our Clients -->

	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-footer col-md-2 col-xs-6">
		    			<h3>Multiplataformas!</h3>
		    			<div class="portfolio-item">
							<div class="portfolio-image">
								<a><img src="img/homepage-slider/slide1.png" alt="Project Name"></a>
							</div>
						</div>
		    		</div>
		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Navegar</h3>
		    			<ul class="no-list-style footer-navigate-section">
		    				<li><a href="index.php">Inicio</a></li>
		    				<li><a href="page-portfolio-3-columns-1.php">Roupas</a></li>
		    				<li><a href="page-team.php">Equipe</a></li>
		    				<li><a href="page-testimonials-clients.php">Avaliações</a></li>
		    				<li><a href="page-blog-posts.php">Blog</a></li>
		    				<li><a href="page-faq.php">FAQ</a></li>
		    			</ul>
		    		</div>
		    		
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Contate-nos</h3>
		    			<p class="contact-us-details">
	        				<b>Endereço:</b> R. Fashion, 456 – Hortolândia, Brasil<br/>
	        				<b>Telefone:</b> +55 (19) 988029822<br/>
	        				<b>Email:</b> <a href="mailto:suporteoutwear@gmail.com">suporteoutwear@gmail.com</a>
	        			</p>
		    		</div>
		    		<div class="col-footer col-md-2 col-xs-6">
		    			<h3>Esteja Conectado</h3>
		    			<ul class="footer-stay-connected no-list-style">
		    				<li><a class="facebook"></a></li>
		    				<li><a class="twitter"></a></li>
		    			</ul>
		    		</div>
		    	</div>
		    </div>
	    </div>
		<!-- Fim Footer -->

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

    </body>
</html>