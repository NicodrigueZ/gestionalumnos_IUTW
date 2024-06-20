<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Alumnos</h1>
            <p>Ingresar datos de alumnos</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Alumnos</li>
              <li><a href="#"><?= $titulo ?> Alumnos</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="well bs-component">
                    <form class="form-horizontal" method="POST" action="?c=alumnos&a=Guardar">  
                      <fieldset>
                        <legend><?= $titulo ?> Alumno</legend>
                        <div class="form-group">
                            <input  class="form-control" name="ID" type="hidden" value = "<?=$a->getIdalumno()?>">
                            <label class="col-lg-2 control-label" for="nombre_alum">Nombre</label>
                          <div class="col-lg-10">
                            <input required class="form-control" name="nombre_alum" type="text" placeholder="Nombre Alumno" value = "<?=$a->getNombre()?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="apellido_alum">Apellido</label>
                          <div class="col-lg-10">
                            <input required class="form-control" name="apellido_alum" type="text" placeholder="Apellido Alumno" value = "<?=$a->getApellido()?>">
                            
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="email_alum">Email</label>
                          <div class="col-lg-10">
                            <input required class="form-control" name="email_alum" type="text" placeholder="Email Alumno" value = "<?=$a->getEmail()?>">
                               
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default" type="reset">Cancelar</button>
                            <button class="btn btn-primary" type="submit">Enviar</button>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>