<?php
include 'connect.php';

$id = $_GET['id'];
$j="select*from prod where id=$id";
$qe= mysqli_query($con, $j);
$h=mysqli_fetch_assoc($qe);

if(isset($_POST['sub'])){
    $n=$_POST['nome'];
    $p=$_POST['pais'];
    $est=$_POST['estado'];
    $end=$_POST['endereco'];
    $cep=$_POST['cep'];
    $tell=$_POST['telefone'];
    $mail=$_POST['email'];
    /* $fto=$_POST['image']; */

    $i="insert into pedidos(nome, pais, estado, endereco, cep, telefone, email, image)value('$n','$p','$est','$end','$cep','$tell','$mail', '$h[image]')";
    mysqli_query($con, $i);
}
?>

<?php
$s="select*from reg where id='$_SESSION[id]'";
$qu= mysqli_query($con, $s);
$f=mysqli_fetch_assoc($qu);
?>

<?php
  if(isset($_POST['sub'])){
$n = mysqli_real_escape_string($con, $_POST['nome']);
$p = mysqli_real_escape_string($con, $_POST['pais']);
$est = mysqli_real_escape_string($con, $_POST['estado']);
$end = mysqli_real_escape_string($con, $_POST['endereco']);
$cep = mysqli_real_escape_string($con, $_POST['cep']);
$tell = mysqli_real_escape_string($con, $_POST['telefone']);
$mail = mysqli_real_escape_string($con, $_POST['email']);
/*$fto = mysqli_real_escape_string($con, $_POST['image']);*/
    header ('location:index.php');
  }
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compra do produto</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

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
    <link rel="icon" href="BancoDeImagens/Logos/LogoColorida/(2) 500LogoColorida.png">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <div class="mainmenu-wrapper">
	        <div class="container">
	        	<div class="menuextras">
					<div class="extras">
						<ul>
							<li>
								<div class="dropdown choose-country">
									<a class="#" data-toggle="dropdown"><img src="img/flags/br.png" alt="Brasil"> BR</a>
								</div>
							</li>
			        		<li><a href="page-login.php">Voltar ao login</a></li>
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

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form role="form" method="post">
                    <div class="row">
<!-- FORMULARIO --> <!-- FORMULARIO --> <!-- FORMULARIO --> <!-- FORMULARIO --> <!-- FORMULARIO --> <!-- FORMULARIO --> <!-- FORMULARIO -->
                        <div class="col-lg-8 col-md-6">
                            <h6 class="checkout__title">Detalhes do usuario</h6>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p>Nome Completo<span>*</span></p>
                                        <input type="text" id="inputName" name="nome">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>País<span>*</span></p>
                                        <input type="text" id="inputName" name="pais">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Estado<span>*</span></p>
                                        <input type="text" id="inputName" name="estado">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Endereço<span>*</span></p>
                                <input class="checkout__input__add" type="text" id="inputName" name="endereco">
                            </div>
                            <div class="checkout__input">
                                <p>CEP<span>*</span></p>
                                <input type="text" id="inputName" name="cep">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Telefone<span>*</span></p>
                                        <input type="text" id="inputName" name="telefone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" id="inputName" name="email">
                                    </div>
                                </div>
                            </div>
                        </div>
<!-- FORMULARIO --> <!-- FORMULARIO --> <!-- FORMULARIO --> <!-- FORMULARIO --> <!-- FORMULARIO --> <!-- FORMULARIO --> <!-- FORMULARIO -->
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                    <div class="portfolio-item">
							            <div class="portfolio-image">
								            <a><img src="<?php echo $h['image']?>" alt="Project Name"></a>
							            </div>
						            </div>
                                <div class="checkout__order__products"><span>Informações da compra</span><?php echo $h['NomeProduto']?></div>
                                <ul class="checkout__total__products">
                                    <li>Identifição: <?php echo $h['id']?><span><?php echo $h['PrecoProduto']?></span></li>
                                </ul>
                                <ul class="checkout__total__products">
                                    <li>Cor.<span><?php echo $h['CorProduto']?></span></li>
                                </ul>
                                <ul class="checkout__total__products">
                                    <li>Tamanho.<span><?php echo $h['TamanhoProduto']?></span></li>
                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Total <span><?php echo $h['PrecoProduto']?></span></li>
                                </ul>                                                          
                                <button name="sub"  type="submit" class="site-btn"><center>Concluir pagamento</center></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <!-- Search Begin -->

    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js2/jquery-3.3.1.min.js"></script>
    <script src="js2/bootstrap.min.js"></script>
    <script src="js2/jquery.nice-select.min.js"></script>
    <script src="js2/jquery.nicescroll.min.js"></script>
    <script src="js2/jquery.magnific-popup.min.js"></script>
    <script src="js2/jquery.countdown.min.js"></script>
    <script src="js2/jquery.slicknav.js"></script>
    <script src="js2/mixitup.min.js"></script>
    <script src="js2/owl.carousel.min.js"></script>
    <script src="js2/main.js"></script>

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