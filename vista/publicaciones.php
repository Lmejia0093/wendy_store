
<?php  include_once 'menu_principal/encabezado.php'; ?>

<title>perfil/Publicaciones</title>


<table class="table table-bordered table-primary">
  <caption>Publicaciones</caption>
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">titulo</th>
      <th scope="col">mensaje</th>
      <th scope="col">estado</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($this->dato->listar() as $k) : ?>
    <tr>
    <th scope="row">1</th>
      <td><?php echo $k->id_articulo;  ?></td>
      
    </tr>
  <?php  endforeach;  ?>
    
 
  </tbody>
</table>

<?php  include_once 'menu_principal/pie.php'; ?>