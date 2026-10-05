<?php
include 'connect.php';
if(isset($_POST['sub'])){
    $t=$_POST['text'];
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $c=$_POST['city'];
    $g=$_POST['gen'];
    $d=$_POST['cpf'];
    $a=$_POST['aniver'];
	$adus=$_POST['adus'];
	$img=$_POST['img'];

    $i="insert into reg(name,username,password,city,gender,cpf,aniversario,fk_idProfile,image)value('$t','$u','$p','$c','$g','$d','$a','$adus','$img')";
    mysqli_query($con, $i);
}
?>

<?php
if(isset($_POST['log'])){
      header ('location:page-login.php');
   }
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Registro Usuario</title>
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

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Registrar Usuarios</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="basic-login">
							<form role="form" method="post">
								<!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- -->
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Nome Completo</b></label>
									<input class="form-control" id="register-username" type="text" placeholder="Nome Completo" name="text">
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Usuario</b></label>
									<input class="form-control" id="register-username" type="text" placeholder="Usuario" name="user">
								</div>
								<div class="form-group">
		        				 	<label for="register-password"><i class="icon-lock"></i> <b>Senha</b></label>
									<input class="form-control" id="register-password" type="password" placeholder="Senha" name="pass">
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Cidade</b></label>
									<input class="form-control" id="register-username" type="text" placeholder="Cidade" name="city">
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-lock"></i> <b>Cpf</b></label>
									<input class="form-control" id="register-password" type="text" placeholder="CPF" name="cpf">
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Aniversario</b></label>
									<input class="form-control" id="register-username" type="date" placeholder="Aniversario" name="aniver">
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Imagem</b></label>
									<input class="form-control" id="register-username" type="text" placeholder="BancoDeImagens/Roupas/ (Categoria)Oficial/ (Nome Img).png" name="img">
								</div>
								<div class="form-group">
									<label for="register-username"><i class="icon-user"></i> <b>Genero</b></label><p></p>
									<input type="radio"name="gen" id="gen" value="Masculino">Masculino
									<input type="radio" name="gen" id="gen" value="Feminino">Feminino
        						</div>
								<div class="form-group">
									<label for="register-username"><i class="icon-user"></i> <b>ADMINISTRADOR OU USUARIO</b></label><br></br>
									<input type="radio"name="adus" id="gen" value="1">Administrador
									<input type="radio" name="adus" id="gen" value="2">Usuario
        						</div>
								<!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- --> <!-- -->
								<div class="form-group">
									<button type="submit" class="btn pull-right" name="sub">Registrar</button>
									<div class="clearfix"></div>
								</div>
								<div class="form-group">
									<button type="submit" class="btn pull-right" name="log">Voltar ao login</button>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-sm-6 col-sm-offset-1 social-login">
						<p>Visite nossa pagina no Facebook e Twitter</p>
						<div class="social-login-buttons">
							<a class="btn-facebook-login">Facebook.com/Outwear</a>
							<a class="btn-twitter-login">@OutWear</a>
						</div>
					</div>
				</div>
			</div>
		</div>

	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
		    	<div class="row">		    			    		
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Contatos</h3>
		    			<p class="contact-us-details">
	        				<b>Endereço:</b>R. Fashion, 456 – Hortolândia, Brasil<br/>
	        				<b>Telefone:</b> +55 (19) 988029822<br/>
	        				<b>Atendentes:</b> Vinicius Vieira, Kaio Guerra, Lucas Gabriel<br/>
	        				<b>Email:</b> <a href="mailto:suporteoutwear@gmail.com">suporteoutwear@gmail.com</a>
	        			</p>
		    		</div>
		    		<div class="col-footer col-md-2 col-xs-6">
		    			<h3>Fique Conectado</h3>
		    			<ul class="footer-stay-connected no-list-style">
		    				<li><a href="#" class="facebook"></a></li>
		    				<li><a href="#" class="twitter"></a></li>
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