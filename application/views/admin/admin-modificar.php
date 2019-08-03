
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Modificar Película</h3>

        <div class="row mt">
          <div class="col-lg-12">

                  <form class="cmxform form-horizontal style-form" id="commentForm" method="get" action="">
                          <div class="form-group ">
                            <div class="col-lg-10">
                              <input class=" form-control" id="Mbusqueda" name="busqueda" minlength="2" type="text" placeholder="Buscar pelicula a Modificar" required />
                            </div>

                          <div class="col-lg-2">
                            <button class="btn btn-theme03" type="submit">BUSCAR</button>
                          </div>
                        </div>
                  </form>

          </div><br>


         <div class="row">
           <div class="col-lg-12">
           <div class="form-panel">
               <div class=" form">
                   <form class="cmxform form-horizontal style-form" id="commentForm" method="get" action="">
                      <div class="form-group ">
                            <div class="  col-lg-9">
                              <label class="control-label col-md-4">Cargar Portada:</label>
                              <div class="col-md-6">
                                <div class="fileupload fileupload-new" data-provides="fileupload">

                                  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                                  </div>
                                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>

                                  <div>
                                    <span class="btn btn-theme02 btn-file">
                                      <span class="fileupload-new"><i class="fa fa-paperclip"></i> Cambiar</span>
                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Cambiar</span>
                                    <input type="file" class="default" />
                                    </span>
                                    <a href="ModificarMovie.php#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                </div>
                              </div>

                    </div>
                    </div>
                    </div>
                    <div class="form-group ">
                    <label for="Ctitulo" class="control-label col-lg-3">Titulo de la Pelicula:</label>
                    <div class="col-lg-4">
                      <input class=" form-control" id="Ctitulo" name="titulo" minlength="2" type="text" required />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="Cgenero" class="control-label col-lg-3">Genero de la Pelicula:</label>
                    <div class="col-lg-4">
                      <input class="form-control " id="Cgenero" type="text" name="genero" required />
                    </div>
                  </div>

                 <div class="form-group ">
                    <label for="Cdirector" class="control-label col-lg-3">Director de la Pelicula:</label>
                    <div class="col-lg-4">
                      <input class="form-control " id="Cdirector" type="text" name="director" required />
                    </div>
                  </div>

                   <div class="form-group">
                  <label for="Cdate" class="control-label col-lg-3">Seleccione fecha de estreno:</label>
                  <div class="col-md-3">
                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2019" class="input-append date dpYears">
                      <input type="text" readonly="" name="Cdate" size="16" class="form-control" required>
                      <span class="input-group-btn add-on">
                        <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                    </div>

                    </div>
                   </div>

                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-3">URL Del Trailer de la Pelicula:</label>
                    <div class="col-lg-4">
                      <input class="form-control " id="curl" type="url" name="url" required/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="Ccomentario" class="control-label col-lg-3">Descripcion de la Pelicula:</label>
                    <div class="col-lg-4">
                      <textarea class="form-control " id="Ccomentario" name="comentario" required></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-3  col-lg-4">
                      <button class="btn btn-theme03" type="submit">Modificar</button>
                      <button class="btn btn-theme04" type="button">Cancel</button>
                    </div>
                  </div>

                    </form>
                </div>
           </div>

          </div>

         </div>
        </div>

      </section>




   </section>
  <!--/main content-->

      <!--footer start-->
