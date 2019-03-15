

<html>
 <head>
 </head>
 <body>
                                           <?php echo form_open_multipart('test/subirwea');?>
                                            <div class="col-md-12" data-for="message">
                                                <font color=#efefef>Solo JPG</font>
                                                <input type="file" name="multipleFiles[]" multiple="multiple"><br><br>
                                            </div>
                                            <div class="input-group-btn col-md-12" style="margin-top: 10px;"><button href="" style="border-radius: 100px;" name="submit" value="Submit" type="submit" class="btn btn-form btn-danger-outline display-4">Cambiar imagen de perfil</button></div>
                                          <?php echo form_close(); ?>



</body>
</html>