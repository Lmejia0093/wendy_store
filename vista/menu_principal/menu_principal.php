  <!-- Sidebar Menu -->
  <?php  $opcion = $_REQUEST['c']; ?>
  <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Orders
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?c=orden_detalle" class="nav-link <?php echo ($opcion == "orden_detalle" )?"active":"";   ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ordenes</p>
                </a>
              </li>            
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?c=orden_nueva" class="nav-link <?php echo ($opcion == "orden_nueva" )?"active":"";   ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nueva Orden</p>
                </a>
              </li>            
            </ul>



          </li>



    
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->