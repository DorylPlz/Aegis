<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo-114x141.png'); ?>" type="image/x-icon">
  <meta name="description" content="">
   <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <?php header("Cache-Control: no-cache, must-revalidate"); ?>

  
  
    <section class="menu cid-r0RqVqIHso" once="menu" id="menu1-l">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://www.clanlegionaegis.cl">
                         <img src="<?php echo base_url('assets/images/logo-114x141.png'); ?>" alt="" title="" style="height: 6rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="<?=site_url("main")?>">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                        Inicio</a>
                </li><li class="nav-item"><a class="nav-link link text-white display-4" href="<?=site_url("main/nosotros")?>">
                <span class="mbri-preview mbr-iconfont mbr-iconfont-btn"></span>
                        Conocenos</a></li>
                <li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="<?=site_url("main/codigos")?>" aria-expanded="false" data-toggle="dropdown-submenu">
                        
                        <span class="mbri-align-justify mbr-iconfont mbr-iconfont-btn"></span>
                        Reglamento</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="<?=site_url("main/codigos")?>" aria-expanded="false">Reglamento</a><a class="text-white dropdown-item display-4" href="<?=site_url("main/sanciones")?>" aria-expanded="false">Sanciones</a><a class="text-white dropdown-item display-4" href="<?=site_url("main/ts3")?>" aria-expanded="false">TeamSpeak</a><a class="text-white dropdown-item display-4" href="<?=site_url("main/inasistencias")?>" aria-expanded="false">Inasistencias</a><a class="text-white dropdown-item display-4" href="<?=site_url("main/especialidades")?>" aria-expanded="false">Especialidades</a></div></li>

                        <li class="nav-item"><a class="nav-link link text-white display-4" href="<?=site_url("main/asistencia")?>"" aria-expanded="false"><span class="mbri-bulleted-list mbr-iconfont mbr-iconfont-btn"></span>
                        Asistencia</a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="<?=site_url("main/pelotones")?>"" aria-expanded="false">
                        <span class="mbri-numbered-list mbr-iconfont mbr-iconfont-btn"></span>
                        Pelotones</a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="<?=site_url("main/galeria")?>"" aria-expanded="false">
                        <span class="mbri-photos mbr-iconfont mbr-iconfont-btn"></span>Galería</a></li>




<?php if($this->session->userdata('login')){ ?>
                        <li class="nav-item"><a class="nav-link link text-white display-4" href="<?=site_url("user/profile?nombre=")?><?php echo $this->session->userdata('nick'); ?><?php echo "&id=" ?><?php echo $this->session->userdata('id'); ?>" aria-expanded="false"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>
                        Perfil</a></li>
                        <?php if($this->session->userdata('zeus')){ ?>
                        <li class="nav-item"><a class="nav-link link text-white display-4" href="<?=site_url("gestion/main")?>" aria-expanded="false"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>
                        Administración</a></li>
                        <?php }else{ ?>
                            <li class="nav-item"><a class="nav-link link text-white display-4" href="" aria-expanded="false">
                        </a>
                        </li>

                        <?php } ?>
                        </ul>

            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-danger-outline display-4" href="<?=site_url("user/logOut")?>""><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>
                    Cerrar Sesión</a></div>
            </div>





<?php }else{ ?>









                        <li class="nav-item"><a class="nav-link link text-white display-4" href="<?=site_url("main/login")?>" aria-expanded="false"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>
                        Ingresa</a></li>

                        <li class="nav-item"><a class="nav-link link text-white display-4" href="" aria-expanded="false">
                        </a>
                        </li>
                        
                        </ul>

            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-danger-outline display-4" href="<?=site_url("main/formulario")?>""><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>
                    Inscribete</a></div>
            </div>












<?php } ?>


    </nav>
</section>