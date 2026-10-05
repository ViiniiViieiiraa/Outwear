<?php
include 'connect.php';
if(isset($_POST['sub'])){
    $t=$_POST['nome'];
    $u=$_POST['preco'];
    $p=$_POST['cor'];
    $c=$_POST['tam'];
    $img=$_POST['img'];
    

    $i="update prod set NomeProduto='$t',PrecoProduto='$u',CorProduto='$p',TamanhoProduto='$c',image='$img' where id='$_GET[roupas]'";
    mysqli_query($con, $i);
    header('location:projects.php');
}

    $s="select*from reg where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);

    $j='select*from prod where id="'.$_GET['roupas'].'"';
    // $qe= mysqli_query($con, $j);
    // $h=mysqli_fetch_assoc($qe);
    $result = $con->query($j);
    $row = $result->fetch_assoc();
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar Produtos</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <link rel="icon" href="BancoDeImagens/Logos/LogoColorida/(2) 500LogoColorida.png">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="indexadm.php" class="nav-link">Home</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="indexadm.php" class="brand-link">
      <img src="BancoDeImagens/Logos/LogoPaleta/(1) 300LogoOFC.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Outwear</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
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
                <a href="projects.php" class="nav-link active">
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editor dos produtos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">

                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="<?php echo $row['image']?>" alt="Item Name">
                </div>

                <h3 class="profile-username text-center"><?php echo $row['NomeProduto']?></h3>

                <p class="text-muted text-center"><?php echo $row['PrecoProduto']?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>ID do produto</b> <a class="float-right"><?php echo $row['id']?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Nome</b> <a class="float-right"><?php echo $row['NomeProduto']?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Cor do produto</b> <a class="float-right"><?php echo $row['CorProduto']?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Tamanho</b> <a class="float-right"><?php echo $row['TamanhoProduto']?></a>
                  </li>
                </ul>
                </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              </div><!-- /.card-header -->
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="settings">
                    <form method="POST" enctype="multipart/form-data" class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nome Produto</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="Nome Produto" name="nome" value="<?php echo $row['NomeProduto']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Preço Produto</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail" placeholder="Preço" name="preco" value="<?php echo $row['PrecoProduto']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Cor Produto</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Cor produto" name="cor" value="<?php echo $row['CorProduto']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Tamanho Produto</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="inputExperience" placeholder="Tamanho" name="tam" value="<?php echo $row['TamanhoProduto']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Imagem</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="inputExperience" placeholder="Imagem" name="img" value="<?php echo $row['image']?>">
                        </div>
                      </div>
                      <div class="row">
                        <div class="offset-sm-2 col-sm-10">
                          <a href="products.php?roupas=<?php echo $row['id']?>"><button name="sub"  type="submit" value="submit" class="btn btn-danger">Edit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
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
<!-- Bootstrap 4 -->
<script src="AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="AdminLTE-3.2.0/dist/js/demo.js"></script>
</body>
</html>
