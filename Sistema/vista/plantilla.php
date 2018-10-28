<?php
//Funcion para quitar el error del header
ob_start();
//para iniciar la sesion y obtener las variables
session_start();
if(isset($_SESSION["nombre"]))
{
  
}else
{
  
  //Si no hay una sesion se envia al login
  header('Location: ../index.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>GURU Able - Premium Admin Template </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="default/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="default/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="default/assets/icon/icofont/css/icofont.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="default/assets/pages/menu-search/css/component.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="default/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="default/assets/css/jquery.mCustomScrollbar.css">
  
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  
    <!-- Required Fremwork -->
   
    <!-- themify-icons line icon -->
    
    <!-- ico font -->
    
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="default/assets/pages/flag-icon/flag-icon.min.css">
    <!-- Menu-Search css -->
    
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="default/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="default/assets/css/style.css">
</head>
  
  <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="index.html">
                            <!--La ruta de la imagen para mostrarla en el html-->
                            <img class="img-fluid" src="<?=$_SESSION["ruta_img"]?>" alt="Theme-Logo" width="30" height="30"/>
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#!">
                                        <span><?=$_SESSION["nombre"]?></span>
                                        <i class="ti-angle-down"></i>
                                    </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="index.php?action=perfil">
                                                <i class="ti-user"></i> Profile
                                            </a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=cerrarSesion">
                                        <i class="ti-layout-sidebar-left"></i> Logout
                                    </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> 
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <div class="user-details">
                                        <span><?=$_SESSION["nombre"]?></span>
                                        <span id="more-details"><?php echo $_SESSION["nombre_usuario"]?><i class="ti-angle-down"></i></span>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="index.php?action=perfil"><i class="ti-user"></i>View Profile</a>
                                            <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--<div class="pcoded-search">
                                <span class="searchbar-toggle">  </span>
                                <div class="pcoded-search-box ">
                                    <input type="text" placeholder="Search">
                                    <span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>
                                </div>
                            </div>-->
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">MODULOS</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="index.php?action=categorias">
                                        <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.navigate.main">Categorias</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                          <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="index.php?action=prodcutos">
                                        <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.navigate.main">Productos</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                          <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="index.php?action=usuarios">
                                        <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.navigate.main">Usuarios</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                          <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="index.php?action=inventario">
                                        <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.navigate.main">Inventario</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                      <?php
                                        
                                        //En esta zona sera donde se muestren las demas paginas
                                        $mvc = new MvcControlador();
                                        $mvc -> enlacesPaginasControlador();
                                        ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<?php
ob_end_flush();
?>
    <script type="text/javascript" src="bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="bower_components/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="bower_components/modernizr/js/css-scrollbars.js"></script>

<!-- data-table js -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="default/assets/pages/data-table/js/jszip.min.js"></script>
<script src="default/assets/pages/data-table/js/pdfmake.min.js"></script>
<script src="default/assets/pages/data-table/js/vfs_fonts.js"></script>
<script src="bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript"
        src="bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<!-- Custom js -->
<script src="default/assets/pages/data-table/js/data-table-custom.js"></script>

<script src="default/assets/js/pcoded.min.js"></script>
<script src="default/assets/js/demo-12.js"></script>
<script src="default/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="default/assets/js/script.js"></script>
</body>

</html>
