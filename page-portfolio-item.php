<?php
include 'connect.php';
if(isset($_POST['sub'])){
    $t=$_POST['nome'];
    $u=$_POST['preco'];
    $p=$_POST['cor'];
    $c=$_POST['tam'];
    if($_FILES['f1']['NomeProduto']){
    move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['NomeProduto']);
    $img="image/".$_FILES['f1']['NomeProduto'];
    }
    else{
        $img=$_POST['img1'];
    }
    $i="update prod set NomeProduto='$t',PrecoProduto='$u',CorProduto='$p',TamanhoProduto='$c',image='$img' where id='$_SESSION[id]'";
    mysqli_query($con, $i);
    header('location:products.php');
}

    $s="select*from reg where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);
  ?>

  <?php
    $id = $_GET['id'];
    $j="select*from prod where id=$id";
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
        <title>Informações do produto</title>
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

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1>Informações do produto</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<!-- Image Column -->
					<div class="col-sm-6">
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#"><img src="<?php echo $h['image']?>" alt="Project Name"></a>
							</div>
						</div>
					</div>
					<!-- End Image Column -->
					<!-- Project Info Column -->
					<div class="col-sm-6 product-details">
	    				<h2><?php echo $h['NomeProduto']?></h2>
	    				<div class="price">
							<?php echo $h['PrecoProduto']?> <!-- PROMOCAO <span class="price-was"></span> --> 
							<p></p>
						</div>
						<table class="shop-item-selections">
							<!-- Color Selector -->
							<tr>
								<td><b>Numero de identifição:</b></td>
								<td>
									<div class="dropdown choose-item-color">
									<?php echo $h['id']?>
									</div>
								</td>
							</tr>
							<!-- Color Selector -->
							<tr>
								<td><b>Cor:</b></td>
								<td>
									<div class="dropdown choose-item-color">
											<?php echo $h['CorProduto']?>
									</div>
								</td>
							</tr>
							<!-- Size Selector -->
							<tr>
								<td><b>Tamanho:</b></td>
								<td>
									<div class="dropdown">
											<?php echo $h['TamanhoProduto']?>
									</div>
								</td>
							</tr>
							<!-- Quantity -->

							<!-- Add to Cart Button -->
							<tr>
								<td>&nbsp;</td>
								<td>
								<div class="actions">
									<a href="checkout.php?id=<?php echo $h['id']?>" class="btn btn-small"><i class="icon-shopping-cart icon-white"></i> Comprar </a>
								</div>
								</td>
							</tr>
						</table>
	    			</div>
					<!-- End Project Info Column -->
				</div>
				<!-- Related Projects -->
				<h3>Navegue pela loja</h3>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#"><img src="img/equipe.png" alt="Project Name"></a>
							</div>
							<div class="portfolio-info-fade">
								<ul>
									<li class="portfolio-project-name">Nossa Equipe</li>
									<li>Conheça nosso time</li>
									<li>Os responsaveis pela loja</li>
									<li class="read-more"><a href="page-team.php" class="btn">IR</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#"><img src="img/roupascabide.png" alt="Project Name"></a>
							</div>
							<div class="portfolio-info-fade">
								<ul>
									<li class="portfolio-project-name">Roupas</li>
									<li>Visite todas as nossas peças</li>
									<li>Veja nossos novos modelos</li>
									<li class="read-more"><a href="page-portfolio-3-columns-1.php" class="btn">IR</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#"><img src="img/estrelas.png" alt="Project Name"></a>
							</div>
							<div class="portfolio-info-fade">
								<ul>
									<li class="portfolio-project-name">Opniões</li>
									<li>Veja as opniões dos nossos clientes</li>
									<li>Avaliações da nossa loja</li>
									<li class="read-more"><a href="page-testimonials-clients.php" class="btn">IR</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- End Related Projects -->
			</div>
		</div>

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