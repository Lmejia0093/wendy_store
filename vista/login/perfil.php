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
                

                <h3 class="profile-username text-center"><?php echo $_SESSION['user'] ?></h3>

                <p class="text-muted text-center">Software Engineer</p>
                <div class="status"> <i class="fa fa-circle offline"></i> online </div>

                <ul class="list-group list-group-unbordered mb-3">
                
                  <li class="list-group-item">
                    <b>Cantidad de usuarios: </b> <a class="float-right"><?php echo  $_SESSION['cantidad_user'] ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Rol de usuario: </b> <a class="float-right"><?php echo $_SESSION['nombre_rol'] ?></a>
                  </li>
                </ul>

                <a  href="?c=cerrar_session" class="btn btn-danger btn-block"><b>Cerrar Session</b></a>
                <a  href="?c=chat" class="btn btn-warning btn-block"><b>Chat</b></a>
              
              </div>   
              </div>   <!-- /.card-body -->
            
</div>  <!-- /.card -->
       
           
        
</div> <!-- /.col -->
       
      </div>  <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>