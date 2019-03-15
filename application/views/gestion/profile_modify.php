  <meta http-equiv =”Cache-Control” content =”no-cache”/>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <html manifest="your-manifest-file">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/factions-blanco-logo-156x61.png'); ?>" type="image/x-icon">
  <meta name="description" content="">
  <title>Perfil - <?php
                                                                    foreach ($userData->result_array() as $row){
                                                                        echo $row['nick'];
                                                                    }
                                                                    ?></title>
  <link rel="stylesheet" href="<?php echo base_url('assets/web/assets/mobirise-icons/mobirise-icons.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/tether/tether.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap-grid.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap-reboot.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/socicon/css/styles.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/datatables/data-tables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dropdown/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/theme/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/mobirise/css/mbr-additional.css'); ?>" type="text/css">
  
  
  
</head>
<body>


<section class="engine"><a href=""></a></section><section class="mbr-section content5 cid-r11UZti5F6 mbr-parallax-background" id="content5-2i">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1"><em>
                                                                   <?php
                                                                    foreach ($userData->result_array() as $row){
                                                                        echo $row['abrev'];
                                                                    }
                                                                    ?>
                                                                    .
                                                                    <?php
                                                                    foreach ($userData->result_array() as $row){
                                                                        echo $row['nick'];
                                                                    }
                                                                    ?>


                </em></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5"><?php
                                                                    foreach ($userData->result_array() as $row){
                                                                        echo $row['pel_name'];
                                                                    }
                                                                    ?></h3>
                
                
            </div>
        </div>
    </div>
</section>

<section class="features11 cid-r1j24Xf6uQ mbr-parallax-background" id="features11-3f">



    
<?php foreach ($userData->result_array() as $row){ 
  if($this->session->userdata('id')==$row['id_usu']){ ?>
    <div class="container">   
        <div class="col-md-12">
            <div class="media-container-row">
                <div class="mbr-figure" style="width: 50%;">
                    <img src="<?php clearstatcache(); echo base_url('assets/images/profile' ); ?><?php echo "/" ?><?php echo $row['img_perfil']; ?>" height="20%" width="40%">
                    <hr/>
                    <br/>

                                <div class="container">
                                    <div class="media-container-row title">
                                        <div class="col-12 col-md-8">
                                          <form method="post" action="<?=site_url("user/cambio_img")?>" enctype="multipart/form-data">
                                              <input type="hidden" class="form-control" name="user" id="user" value="<?php echo $row['id_usu']; ?>">
                                              <input type="hidden" class="form-control" name="nick" id="nick" value="<?php echo $row['nick']; ?>">
                                            <div class="col-md-12" data-for="message">
                                                <font color=#efefef>Solo JPG</font>
                                                <input type="file" name="image" id="image"><br><br>
                                            </div>
                                            <div class="input-group-btn col-md-12" style="margin-top: 10px;"><button href="" style="border-radius: 100px;" value="upload" type="submit" class="btn btn-form btn-danger-outline display-4">Cambiar imagen de perfil</button></div>
                                          </form>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                              <?php }} if($this->session->userdata('id')==$row['id_usu']){
                                        if($this->session->userdata('zeus')){ 
                                          ?>
                                <div class="container">
                                    <div class="media-container-row title">
                                        <div class="col-12 col-md-8">
                                            <p class="mbr-text mb-5 pt-3 mbr-light mbr-fonts-style display-5">
                                              <em><b>AGREGAR ESPECIALIDADES</b></em>
                                            </p>
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Básicas</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Soporte</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">FFEE</a>
                                        </li>
                                      </ul>
                                      <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                          





                                          <form method="post" action="<?=site_url("user/ingresoEsp1")?>">
                                            <table class="table" cellspacing="0">
                                                  <thead>
                                                    <tr class="table-heads ">
                                                        
                                                        
                                                        <input type="hidden" class="form-control" name="user" id="user" value="<?php echo $row['id_usu']; ?>">
                                                        <input type="hidden" class="form-control" name="nick" id="user" value="<?php echo $row['nick']; ?>">
                                                    <th class="head-item mbr-fonts-style display-7"><em>
                                                            <font color=#efefef></font></em></th> 
                                                    <th class="head-item mbr-fonts-style display-7"><em>
                                                            <font color=#efefef>Básicas</font></em></th>
                                                    
                                                  </tr>
                                                  </thead>

                                                  <tbody>
         
                                                    <?php $i = 0;
                                                    foreach ($getEsp1->result() as $rowEsp){ 
                                                      $i++; ?>
                                                      <tr> 
                                                          <td class="body-item mbr-fonts-style display-7"><input type="checkbox" name="esp1-<?php echo $i ; ?>" value="<?php echo $rowEsp->id_especialidad; ?>"><br></td>
                                                          <td class="body-item mbr-fonts-style display-7"><font color=#efefef> <?php echo $rowEsp->esp_name; ?> </font></td>
                                                          <td class="body-item mbr-fonts-style display-7"><font color=#efefef> <?php echo $rowEsp->costo; ?> puntos. </font></td>
                                                      </tr>
                                                    <?php } ?>

                                                  </tbody>
                                                </table>
                                                <span class="input-group-btn"><button style="border-radius: 100px;" href="" type="submit" class="btn btn-form btn-danger-outline display-4" >Ingresar Especialidades Marcadas</button></span>
                                            </form>
                                            




    </div>




  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

 <form method="post" action="<?=site_url("user/ingresoEsp2")?>">
                                            <table class="table" cellspacing="0">
                                                  <thead>
                                                    <tr class="table-heads ">
                                                        
                                                        <input type="hidden" class="form-control" name="user" id="user" value="<?php echo $row['id_usu']; ?>">
                                                        <input type="hidden" class="form-control" name="nick" id="user" value="<?php echo $row['nick']; ?>">
                                                        
                                                    <th class="head-item mbr-fonts-style display-7"><em>
                                                            <font color=#efefef></font></em></th> 
                                                    <th class="head-item mbr-fonts-style display-7"><em>
                                                            <font color=#efefef>Soporte Aéreo/Blindado</font></em></th>
                                                    
                                                  </tr>
                                                  </thead>

                                                  <tbody>
         
                                                    <?php $i2 = 0;
                                                    foreach ($getEsp2->result_array() as $rowEsp2){ 
                                                      $i2++;?>
                                                      <tr> 
                                                          <td class="body-item mbr-fonts-style display-7"><input type="checkbox" name="esp2-<?php echo $i2 ; ?>" value="<?php echo $rowEsp2['id_especialidad']; ?>"><br></td>
                                                          <td class="body-item mbr-fonts-style display-7"><font color=#efefef> <?php echo $rowEsp2['esp_name']; ?> </font></td>
                                                      </tr>
                                                    <?php } ?>

                                                  </tbody>
                                                </table>
                                                <span class="input-group-btn"><button style="border-radius: 100px;" href="" type="submit" class="btn btn-form btn-danger-outline display-4" >Ingresar Especialidades Marcadas</button></span>
                                            </form>


  </div>



  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
 <form method="post" action="<?=site_url("user/ingresoEsp3")?>">
                                            <table class="table" cellspacing="0">
                                                  <thead>
                                                    <tr class="table-heads ">
                                                        
                                                        <input type="hidden" class="form-control" name="user" id="user" value="<?php echo $row['id_usu']; ?>">
                                                        <input type="hidden" class="form-control" name="nick" id="user" value="<?php echo $row['nick']; ?>">
                                                        
                                                    <th class="head-item mbr-fonts-style display-7"><em>
                                                            <font color=#efefef></font></em></th> 
                                                    <th class="head-item mbr-fonts-style display-7"><em>
                                                            <font color=#efefef>FFEE</font></em></th>
                                                    
                                                  </tr>
                                                  </thead>

                                                  <tbody>
         
                                                    <?php $i3 = 0;
                                                    foreach ($getEsp3->result_array() as $rowEsp3){ 
                                                      $i3++;?>

                                                      <tr> 
                                                          <td class="body-item mbr-fonts-style display-7"><input type="checkbox" name="esp3-<?php echo $i3 ; ?>" value="<?php echo $rowEsp3['id_especialidad']; ?>"><br></td>
                                                          <td class="body-item mbr-fonts-style display-7"><font color=#efefef> <?php echo $rowEsp3['esp_name']; ?> </font></td>
                                                      </tr>
                                                    <?php } ?>

                                                  </tbody>
                                                </table>
                                                <span class="input-group-btn"><button style="border-radius: 100px;" href="" type="submit" class="btn btn-form btn-danger-outline display-4" >Ingresar Especialidades Marcadas</button></span>
                                            </form>

  </div>
</div>




                                        
                                        </div>
                                    </div>
                                </div>
                              <?php } ?>
                </div>
                                                      












                                       <?php }elseif($this->session->userdata('zeus')){  ?>

    <div class="container">   
        <div class="col-md-12">
            <div class="media-container-row">
                <div class="mbr-figure" style="width: 50%;">

                                <div class="container">
                                    <div class="media-container-row title">
                                        <div class="col-12 col-md-8">
                                            <p class="mbr-text mb-5 pt-3 mbr-light mbr-fonts-style display-5">
                                              <em><b>AGREGAR ESPECIALIDADES</b></em>
                                            </p>
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Básicas</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Soporte</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">FFEE</a>
                                        </li>
                                      </ul>
                                      <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                          





                                          <form method="post" action="<?=site_url("user/ingresoEsp1")?>">
                                            <table class="table" cellspacing="0">
                                                  <thead>
                                                    <tr class="table-heads ">
                                                        
                                                        
                                                        <input type="hidden" class="form-control" name="user" id="user" value="<?php echo $row['id_usu']; ?>">
                                                        <input type="hidden" class="form-control" name="nick" id="user" value="<?php echo $row['nick']; ?>">
                                                    <th class="head-item mbr-fonts-style display-7"><em>
                                                            <font color=#efefef></font></em></th> 
                                                    <th class="head-item mbr-fonts-style display-7"><em>
                                                            <font color=#efefef>Básicas</font></em></th>
                                                    
                                                  </tr>
                                                  </thead>

                                                  <tbody>
         
                                                    <?php $i = 0;
                                                    foreach ($getEsp1->result() as $rowEsp){ 
                                                      $i++; ?>
                                                      <tr> 
                                                          <td class="body-item mbr-fonts-style display-7"><input type="checkbox" name="esp1-<?php echo $i ; ?>" value="<?php echo $rowEsp->id_especialidad; ?>"><br></td>
                                                          <td class="body-item mbr-fonts-style display-7"><font color=#efefef> <?php echo $rowEsp->esp_name; ?> </font></td>
                                                          <td class="body-item mbr-fonts-style display-7"><font color=#efefef> <?php echo $rowEsp->costo; ?> puntos. </font></td>
                                                      </tr>
                                                    <?php } ?>

                                                  </tbody>
                                                </table>
                                                <span class="input-group-btn"><button style="border-radius: 100px;" href="" type="submit" class="btn btn-form btn-danger-outline display-4" >Ingresar Especialidades Marcadas</button></span>
                                            </form>
                                            




    </div>




  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

 <form method="post" action="<?=site_url("user/ingresoEsp2")?>">
                                            <table class="table" cellspacing="0">
                                                  <thead>
                                                    <tr class="table-heads ">
                                                        
                                                        <input type="hidden" class="form-control" name="user" id="user" value="<?php echo $row['id_usu']; ?>">
                                                        <input type="hidden" class="form-control" name="nick" id="user" value="<?php echo $row['nick']; ?>">
                                                        
                                                    <th class="head-item mbr-fonts-style display-7"><em>
                                                            <font color=#efefef></font></em></th> 
                                                    <th class="head-item mbr-fonts-style display-7"><em>
                                                            <font color=#efefef>Soporte Aéreo/Blindado</font></em></th>
                                                    
                                                  </tr>
                                                  </thead>

                                                  <tbody>
         
                                                    <?php $i2 = 0;
                                                    foreach ($getEsp2->result_array() as $rowEsp2){ 
                                                      $i2++;?>
                                                      <tr> 
                                                          <td class="body-item mbr-fonts-style display-7"><input type="checkbox" name="esp2-<?php echo $i2 ; ?>" value="<?php echo $rowEsp2['id_especialidad']; ?>"><br></td>
                                                          <td class="body-item mbr-fonts-style display-7"><font color=#efefef> <?php echo $rowEsp2['esp_name']; ?> </font></td>
                                                      </tr>
                                                    <?php } ?>

                                                  </tbody>
                                                </table>
                                                <span class="input-group-btn"><button style="border-radius: 100px;" href="" type="submit" class="btn btn-form btn-danger-outline display-4" >Ingresar Especialidades Marcadas</button></span>
                                            </form>


  </div>



  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
 <form method="post" action="<?=site_url("user/ingresoEsp3")?>">
                                            <table class="table" cellspacing="0">
                                                  <thead>
                                                    <tr class="table-heads ">
                                                        
                                                        <input type="hidden" class="form-control" name="user" id="user" value="<?php echo $row['id_usu']; ?>">
                                                        <input type="hidden" class="form-control" name="nick" id="user" value="<?php echo $row['nick']; ?>">
                                                        
                                                    <th class="head-item mbr-fonts-style display-7"><em>
                                                            <font color=#efefef></font></em></th> 
                                                    <th class="head-item mbr-fonts-style display-7"><em>
                                                            <font color=#efefef>FFEE</font></em></th>
                                                    
                                                  </tr>
                                                  </thead>

                                                  <tbody>
         
                                                    <?php $i3 = 0;
                                                    foreach ($getEsp3->result_array() as $rowEsp3){ 
                                                      $i3++;?>

                                                      <tr> 
                                                          <td class="body-item mbr-fonts-style display-7"><input type="checkbox" name="esp3-<?php echo $i3 ; ?>" value="<?php echo $rowEsp3['id_especialidad']; ?>"><br></td>
                                                          <td class="body-item mbr-fonts-style display-7"><font color=#efefef> <?php echo $rowEsp3['esp_name']; ?> </font></td>
                                                      </tr>
                                                    <?php } ?>

                                                  </tbody>
                                                </table>
                                                <span class="input-group-btn"><button style="border-radius: 100px;" href="" type="submit" class="btn btn-form btn-danger-outline display-4" >Ingresar Especialidades Marcadas</button></span>
                                            </form>

  </div>
</div>




                                        
                                        </div>
                                    </div>
                                </div>
                              
                </div>
<?php foreach ($userData->result_array() as $row4){ ?>
                <div class=" align-left aside-content">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-2"><strong><em>
                        MODIFICAR PERFIL</em></strong></h2>
                    <div class="mbr-section-text">
                      <p class="mbr-text mb-5 pt-3 mbr-light mbr-fonts-style display-5">
                      <form action="<?=site_url("user/infouser_modify")?>" method="post" >
                        
                        
                        <input type="hidden" class="form-control" name="user" id="user" value="<?php echo $row4['id_usu']; ?>">
                        <input type="hidden" class="form-control" name="nick" id="nick" value="<?php echo $row4['nick']; ?>">
                        <input type="hidden" class="form-control" name="nousados" id="nousados" value="<?php echo $row4['nousados']; ?>">
                        <input type="hidden" class="form-control" name="usados" id="usados" value="<?php echo $row4['usados']; ?>">
                        <font color=#efefef>Nick: </font>   
                        <input type="text" class="form-control" name="new_nick" id="new_nick" placeholder="<?php echo $row4['nick']; ?>">
                        <br><font color=#efefef>Peloton: </font>                                
                                    <select class="form-control input" name="peloton" data-form-field="peloton" placeholder="Peloton" required="" id="name-form4-25">
                                      <option value="">--Seleccionar--</option>
                                      <?php foreach ($getPelotones->result_array() as $row){ ?>
                                          <option value="<?php echo $row['id_pel']; ?>"><?php echo $row['pel_name']; ?></option>
                                      <?php } ?>

                                    </select>
                        <br/><font color=#efefef>Rango: </font>  
                        <select class="form-control input" name="rango" data-form-field="rango" placeholder="Rango" required="" id="name-form4-25">
                                      <option value="">--Seleccionar--</option>
                                      <?php foreach ($getRangos->result_array() as $rangos){ ?>
                                          <option value="<?php echo $rangos['id_rango']; ?>"><?php echo $rangos['rango_name']; ?></option>
                                      <?php } ?>

                                    </select>
                        <br/><font color=#efefef>Estado: </font>  
                        <select class="form-control input" name="estado" data-form-field="estado" placeholder="Estado" required="" id="name-form4-25">
                                      
                                      <option value="1">Activo</option>
                                      <option value="2">Ban</option>
                                      <option value="3">Inactivo</option>
                                      

                                    </select>
                        <br/><font color=#efefef>Descontar Puntos: Puntos disponibles <?php echo $row4['nousados']; ?></font>  
                        <select class="form-control input" name="descuento" data-form-field="descuento" placeholder="Descuento" required="" id="name-form4-25">
                                      
                                      <option value="0">0</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                      <option value="10">10</option>
                                      <option value="11">11</option>
                                      <option value="12">12</option>
                                      <option value="13">13</option>
                                      <option value="14">14</option>
                                      <option value="15">15</option>
                                      <option value="16">16</option>
                                      <option value="17">17</option>
                                      <option value="18">18</option>
                                      <option value="19">19</option>
                                      <option value="20">20</option>
                                      

                                    </select>
                        <br><span class="input-group-btn"><button style="border-radius: 100px;" href="" type="submit" class="btn btn-form btn-danger-outline display-4" >Modificar Información</button></span>
                      </form>
                      </p>
                      <hr>
                    </div>
           <?php } ?>







                </div>















                                        <?php } ?>
<?php foreach ($userData->result_array() as $row3){ 
  if($this->session->userdata('id')==$row3['id_usu']){ ?>
                <div class=" align-left aside-content">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-2"><strong><em>
                        MODIFICAR PERFIL</em></strong></h2>
                    <div class="mbr-section-text">
                      <p class="mbr-text mb-5 pt-3 mbr-light mbr-fonts-style display-5">
                      <form action="<?=site_url("user/infouser_modify")?>" method="post" >
                        
                        <font color=#efefef>Email: </font><input type="email" class="form-control" name="email" id="email" placeholder="<?php echo $row3['email']; ?>"><br>
                        <font color=#efefef>Steam: </font><input type="text" class="form-control" name="steam" id="steam" placeholder="<?php echo $row3['steam']; ?>"><br>
                        <font color=#efefef>Contraseña: </font><input type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña"><br>
                        <font color=#efefef>Descripción: </font><textarea type="text" rows="3" class="form-control" name="usudesc" id="usudesc" placeholder="Descripción"></textarea><br>

                        <input type="hidden" class="form-control" name="user" id="user" value="<?php echo $row3['id_usu']; ?>">
                        <input type="hidden" class="form-control" name="nick" id="nick" value="<?php echo $row3['nick']; ?>">
                        <?php if($this->session->userdata('zeus')){ ?>
                        <font color=#efefef>Peloton: </font>                                
                                    <select class="form-control input" name="peloton" data-form-field="peloton" placeholder="Peloton" required="" id="name-form4-25">
                                      <option value="">--Seleccionar--</option>
                                      <?php foreach ($getPelotones->result_array() as $row){ ?>
                                          <option value="<?php echo $row['id_pel']; ?>"><?php echo $row['pel_name']; ?></option>
                                      <?php } ?>

                                    </select>
                        <?php } ?>
                        <br><span class="input-group-btn"><button style="border-radius: 100px;" href="" type="submit" class="btn btn-form btn-danger-outline display-4" >Modificar Información</button></span>
                      </form>
                      </p>
                      <hr>
                    </div>
           







                </div>
            </div>
        </div> 
    </div> 
    <?php }elseif($this->session->userdata('id')!==$row3['id_usu']){
             if($this->session->userdata('zeus')==false){ ?> 
          <div class="container">   
        <div class="col-md-12">
            <div class="media-container-row">
                <div class="mbr-figure" style="width: 50%;">
                    
                    <hr/>
                    <br/>
                    
                </div>
                <div class=" align-left aside-content">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-2"><strong><em>
                        NO TIENES PERMITIDO MODIFICAR ESTE PERFIL</em></strong></h2>
                    <div class="mbr-section-text">
                      <p class="mbr-text mb-5 pt-3 mbr-light mbr-fonts-style display-5">
                        
                      </p>
                    </div>








                </div>
            </div>
        </div> 
    </div> 


<?php }}} ?>



</section>






  <script src="<?php echo base_url('assets/web/assets/jquery/jquery.min.js'); ?>"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="<?php echo base_url('assets/touchswipe/jquery.touch-swipe.min.js'); ?>"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/mbr-flip-card/mbr-flip-card.js"></script>
  <script src="assets/datatables/jquery.data-tables.min.js"></script>
  <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url('assets/dropdown/js/script.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/theme/js/script.js'); ?>"></script>
