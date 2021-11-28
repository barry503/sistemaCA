<!-- enviar datos con ajax -->
                        <!-- para editar el usuario -->
                  <div class="tab-pane" id="settings">
                    
                    <h3>Actualizar tus datos</h3>
                    
                    <p>Si actualizas tus datos  debes escribir tu contraseña nuevamente. Por tu seguridad el campo estara vacio.</p>
                    <br>

                    <form  method="post" id="perfil"  class="form-horizontal" >
             
            

<!--  -->
             <input  name="idusuario" type="hidden" value="<?php echo $_SESSION['idusuario']; ?>" required>

        <p>Tu foto de perfil  se actualiza automaticamente al ingresar otra imagen en el campo.</p>

                        <div class="form-group row">
                        <label 
                         for="imagen" 
                        class="col-sm-2 col-form-label" 
                        title="tu fotografia se actualizara automaticamente cuando ingreses la nueva imagen si los cambios no se efectuan cierra la session y vuelve a ingresar"

                        >Foto de perfil:</label>
                        <div class="col-sm-10">
                           
          <input  title="tu fotografia se actualizara automaticamente cuando ingreses la nueva imagen si los cambios no se efectuan cierra la session y vuelve a ingresar" class='form-control' data-buttonText="cambiar imagen de perfil" type="file" name="imagefile" id="imagefile" onchange="upload_image();" >
          
   

                        </div>
                      </div>

                        <div class="form-group row">
                        <label for="usuario" class="col-sm-2 col-form-label">Usuario:</label>
                        <div class="col-sm-10">
                           <input  name="usuario" type="text" class="form-control" 
                           value="<?php echo $_SESSION['usuario']; ?>" required>

                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="clave" class="col-sm-2 col-form-label" title="si deseas actualizar tus datos deveras volver a esribir tu contraseña anterior o colocar otra">Contraseña:</label>
                        <div class="col-sm-10">
                          <input name="clave" type="password" placeholder="por tu seguridad  no mostramos tu contraseña" title="si deseas actualizar tus datos deveras volver a esribir tu contraseña anterior o colocar otra" class="form-control"
                          value="<?php //echo $_SESSION['clave']; ?>"  required >

                        </div>
                      </div>

                      


                      <div class="form-group row">
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-10">
                          <input  name="nombre" type="text" class="form-control"
                          value="<?php echo $_SESSION['nombre']; ?>"  required>
                        </div>
                      </div>


                      <div class="form-group row">
                        <label for="apellido" class="col-sm-2 col-form-label">Apellido:</label>
                        <div class="col-sm-10">
                          <input name="apellido" type="text" class="form-control"
                          value="<?php echo $_SESSION['apellido']; ?>"  required>
                        </div>
                      </div>


                      <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Correo:</label>
                        <div class="col-sm-10">
                          <input name="email" type="email" class="form-control"
                          value="<?php echo $_SESSION['email']; ?>"  >
                        </div>
                      </div>




                      <div class="form-group row">
                        <label for="telefono" class="col-sm-2 col-form-label">Teléfono:</label>
                        <div class="col-sm-10">
                          <input name="telefono" type="text" class="form-control"
                          value="<?php echo $_SESSION['telefono']; ?>"  >
                        </div>
                      </div>


                      <div class="form-group row">
                        <label for="direccion" class="col-sm-2 col-form-label">Dirección:</label>
                        <div class="col-sm-10">
                          <input name="direccion" type="text" class="form-control"
                          value="<?php echo $_SESSION['direccion']; ?>"  >
                        </div>
                      </div>




          
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" required> Acepto los <a href="#">terminos y condiciones</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                      
                          <button type="submit" class="btn btn-success" ><i class="glyphicon glyphicon-refresh"></i>Actualizar datos</button> 
                          
                         <br><br>
                         <div class='col-md-12' id="resultados_ajax"></div><!-- Carga los datos ajax -->
                       <br><br>
                        </div>
                      </div>
                    </form>
                  </div>