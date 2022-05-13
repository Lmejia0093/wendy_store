<?php //session_start(); ?>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo $_SESSION['imagen']  ?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $_SESSION['user'] ?></h3>

                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                
                  <li class="list-group-item">
                    <b>Cantidad de usuarios: </b> <a class="float-right"><?php echo  $_SESSION['cantidad_user'] ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Rol de usuario: </b> <a class="float-right"><?php echo $_SESSION['nombre_rol'] ?></a>
                  </li>
                </ul>

                <a  href="?c=cerrar_session" class="btn btn-danger btn-block"><b>Cerrar Session</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

           
          </div>
          <!-- /.col -->
       
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>