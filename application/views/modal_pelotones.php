  <!-- 1ºpeloton -->
<!--ttecrl-->
          <div id="crl1" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">1ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Coronel</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                               <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th>
                                               <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Perfil</font></em>
                                               </th>
                                         </tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getCrl->result() as $crl1){ 
                                          ?>
        

                                              <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $crl1->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $crl1->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $crl1->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $crl1->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>
                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>



      <!--ttecrl-->




      <!--ttecrl-->
          <div id="ttecrl1" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">1ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Tte.Coronel</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                               <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th>
                                               <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Perfil</font></em>
                                               </th>
                                         </tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getTtecrl->result() as $ttecrl1){ 
                                          ?>
        

                                              <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $ttecrl1->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $ttecrl1->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $ttecrl1->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $ttecrl1->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>
                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>



      <!--ttecrl-->




        <!--Mayor-->
          <div id="mayor1" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">1ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Mayor</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                               <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th>
                                               <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Perfil</font></em>
                                               </th>
                                         </tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getMayor->result() as $mayor1){ 
                                          ?>
        

                                              <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $mayor1->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $mayor1->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $mayor1->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $mayor1->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>
                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /mayor-->


      <!--Capitan-->
          <div id="capitan1" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">1ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Capitan</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getcapitan->result() as $capitan1){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $capitan1->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $capitan1->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $capitan1->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $capitan1->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Capitan-->



      <!--Teniente-->
          <div id="teniente1" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">1ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Teniente</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getteniente->result() as $tenienteA){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $tenienteA->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $tenienteA->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $tenienteA->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $tenienteA->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Teniente-->






      <!--SubTeniente-->
          <div id="subteniente1" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">1ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Sub.Teniente</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getsubteniente->result() as $subtenienteA){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $subtenienteA->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $subtenienteA->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $subtenienteA->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $subtenienteA->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /SubTeniente-->


      <!--Alferez-->
          <div id="alferez1" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">1ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Alferez</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getalferezA->result() as $alferezA){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $alferezA->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $alferezA->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $alferezA->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $alferezA->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Alferez-->


      <!--Sub Oficial Mayor-->
          <div id="subofmayor1" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">1ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Sub Oficial Mayor</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getsubofmayor->result() as $getsubofmayorA){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $getsubofmayorA->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $getsubofmayorA->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $getsubofmayorA->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $getsubofmayorA->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Sub Oficial Mayor-->




      <!--Sub Oficial-->
          <div id="subof1" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">1ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Sub Oficial</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getsubof->result() as $getsubofA){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $getsubofA->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $getsubofA->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $getsubofA->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $getsubofA->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Sub Oficial-->


      <!--Sargentoº1-->
          <div id="sgto1A" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">1ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Sargentoº1</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getsgto1A->result() as $get_sgto1A){ 
                                          ?>
        

                                              <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $get_sgto1A->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $get_sgto1A->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $get_sgto1A->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $get_sgto1A->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button href="" type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>
                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Sargentoº1-->

      <!--Sargentoº2-->
          <div id="sgto2A" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">1ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Sargentoº2</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getsgto2A->result() as $get_sgto2A){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $get_sgto2A->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $get_sgto2A->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $get_sgto2A->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $get_sgto2A->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Sargentoº2-->


      <!--Caboº1-->
          <div id="cabo1A" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">1ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Caboº1</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getcabo1A->result() as $get_cabo1A){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $get_cabo1A->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $get_cabo1A->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $get_cabo1A->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $get_cabo1A->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Caboº1-->


      <!--Caboº2-->
          <div id="cabo2A" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">1ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Caboº2</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getcabo2A->result() as $get_cabo2A){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $get_cabo2A->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $get_cabo2A->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $get_cabo2A->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $get_cabo2A->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Caboº2-->


      <!--Cabo-->
          <div id="caboA" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">1ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Cabo</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getcaboA->result() as $get_caboA){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $get_caboA->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $get_caboA->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $get_caboA->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $get_caboA->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Cabo-->


      <!--Sltp-->
          <div id="sltpA" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">1ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Soldado de Tropa Profesional</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getsltpA->result() as $get_sltpA){ 
                                          ?>
                                               <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $get_sltpA->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $get_sltpA->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $get_sltpA->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $get_sltpA->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Sltp-->


      <!--Slc-->
          <div id="slcA" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">1ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Soldado Conscripto</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getslcA->result() as $get_slcA){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $get_slcA->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $get_slcA->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $get_slcA->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $get_slcA->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Slc-->

      <!--Cadete-->
          <div id="cadeteA" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">1ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Cadete</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getcadeteA->result() as $get_cadeteA){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $get_cadeteA->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $get_cadeteA->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $get_cadeteA->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $get_cadeteA->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Cadete-->

<!--1ºPeloton-->


<!--2ºPeloton-->
      <!--Coronel de Aviación-->
          <div id="crlavB" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">2ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Coronel de Aviación</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getcrlavB->result() as $get_crlavB){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $get_crlavB->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $get_crlavB->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $get_crlavB->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $get_crlavB->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Coronel de Aviación-->

      <!--Comandante de Grupo-->
          <div id="comgruB" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">2ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Comandante de Grupo</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getcomgruB->result() as $get_comgruB){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $get_comgruB->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $get_comgruB->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $get_comgruB->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $get_comgruB->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Comandante de Grupo-->

      <!--Comandante de Escuadrilla-->
          <div id="comescB" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">2ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Comandante de Escuadrilla</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getcomescB->result() as $get_comescB){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $get_comescB->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $get_comescB->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $get_comescB->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $get_comescB->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Comandante de Grupo-->


      <!--Capitán de Bandada-->
          <div id="capbanB" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">2ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Capitán de Bandada</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getcapbanB->result() as $get_capbanB){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $get_capbanB->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $get_capbanB->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $get_capbanB->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $get_capbanB->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Capitán de Bandada-->


      <!--Teniente-->
          <div id="tteB" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">2ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Teniente</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($gettteB->result() as $get_tteB){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $get_tteB->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $get_tteB->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $get_tteB->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $get_tteB->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Teniente-->


      <!--Alférez-->
          <div id="alferezB" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">2ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Alférez</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getalferezB->result() as $get_alferezB){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $get_alferezB->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $get_alferezB->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $get_alferezB->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $get_alferezB->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Alférez-->


      <!--Sub.Alférez-->
          <div id="subalferezB" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">2ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Sub. Alférez</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getsubalferezB->result() as $get_subalferezB){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $get_subalferezB->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $get_subalferezB->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $get_subalferezB->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $get_subalferezB->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Sub. Alférez-->

      <!--Cadete-->
          <div id="cadeteB" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">2ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Cadete</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getcadeteB->result() as $get_cadeteB){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $get_cadeteB->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $get_cadeteB->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $get_cadeteB->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $get_cadeteB->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Cadete-->

<!--/2ºpeloton-->

<!--3ºpeloton-->
      <!--Sgto2-->
          <div id="sgto2C" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">3ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Sargentoº2</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getsgto2C->result() as $get_sgto2C){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $get_sgto2C->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $get_sgto2C->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $get_sgto2C->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $get_sgto2C->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Sgto2C-->
      <!--Caboº1-->
          <div id="cabo1C" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">3ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Caboº1</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getcabo1C->result() as $get_cabo1C){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $get_cabo1C->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $get_cabo1C->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $get_cabo1C->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $get_cabo1C->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Caboº1-->
      <!--Caboº2-->
          <div id="cabo2C" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">3ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Caboº2</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getcabo2C->result() as $get_cabo2C){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $get_cabo2C->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $get_cabo2C->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $get_cabo2C->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $get_cabo2C->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Caboº2-->

      <!--Cabo-->
          <div id="caboC" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">3ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Cabo</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getcaboC->result() as $get_caboC){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $get_caboC->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $get_caboC->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $get_caboC->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $get_caboC->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /Cabo-->


      <!--SLTP-->
          <div id="sltpC" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">3ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Soldado de Tropa Profesional</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getsltpC->result() as $get_sltpC){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $get_sltpC->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $get_sltpC->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $get_sltpC->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $get_sltpC->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /sltp-->

      <!--SLC-->
          <div id="slcC" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">3ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Soldado Conscripto</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getslcC->result() as $get_slcC){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $get_slcC->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $get_slcC->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $get_slcC->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $get_slcC->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /slc-->

      <!--rclt-->
          <div id="rcltC" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  
                  <h6 class="modal-title">3ºPeloton</h6>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  
                  <div class="row">
                            <div class="container container-table">
                                <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
                                    Recluta</em></strong></h2>
                                
                                <div class="table-wrapper">
                                  <div class="container">
                                    
                                  </div>

                                  <div class="container scroll">
                                    <table class="table" cellspacing="0">
                                      <thead>
                                        <tr class="table-heads ">
                                            
                                            
                                            
                                            
                                        <th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Nick</font></em></th><th class="head-item mbr-fonts-style display-7"><em>
                                                <font color=black>Fecha de Ingreso</font></em></th></tr>
                                      </thead>

                                      <tbody>
                                        
                                        
                                          <?php 
                                            foreach($getrcltC->result() as $get_rcltC){ 
                                          ?>
        

                                        
                                                  <form action="<?=site_url("user/profile")?>" method="get">
                                                  <tr>
                                                    <td class="body-item mbr-fonts-style display-7">
                                                        <div class="form-group">
                                                             <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e"><?= $get_rcltC->nick; ?></label>
                                                             <input type="hidden" name="nombre" value="<?= $get_rcltC->nick; ?>"/>
                                                             <input type="hidden" name="id" value="<?= $get_rcltC->id_usu; ?>"/>
                                                        </div>

                                                    </td>
                                                    <td class="body-item mbr-fonts-style display-7"><?= $get_rcltC->fecha; ?></td>
                                                    <td> 
                                                        <span class="input-group-btn"><button type="submit" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Ver perfil</button>
                                                        </span>
                                                    </td>
                                                  </tr> 
                                              </form>

                                          <?php 
                                              } 
                                          ?>
                                          
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="container table-info-container">
                                    
                                  </div>
                                </div>
                              </div>


                  </div>
                
                </div><br>
                <div class="modal-footer">
                  <hr>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
      <!-- /rclt-->

<!--/3ºpeloton-->



          
</section>

  <section class="section-table cid-r129yCvEEM mbr-parallax-background" id="table1-2m">

  
  
  <div style="padding-left: 10%; padding-right: 10%; height: 1300px;">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
          ESTRUCTURA</em></strong></h2>
        <div class="divorganigrama" style="position: center;">


          <div id="chart_div">

          </div>

        </div>
      

    </div>
</section>


<!-- <a data-toggle="modal" data-target="#modal_subir_foro_debate" style="font-style:italic, sans-serif; font-weight:bold;"">Cboº2.Pardus<i class="icon-play3 position-right"></i></a><div id="myBtn" style="color:red; font-style:italic, sans-serif; font-weight:bold;">3ºPeloton</div> -->