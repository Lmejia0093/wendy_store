
<title>perfil/Publicaciones</title>




<table class="table table-bordered table-primary">
  <caption>Publicaciones</caption>
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">nombre</th>
     
    </tr>
  </thead>
  <tbody>
    <?php foreach ($this->dato->listar() as $k) : ?>
    <tr>
      <ths cope="row"></th>
      <td><?php echo $k->id_articulo;  ?></td>
      <td><?php echo $k->nombrearticulo;  ?></td>
      
    </tr>
  <?php  endforeach;  ?>
    
 
  </tbody>
</table>
<a href="?c=nuevo" class="btn btn-block btn-success" >Nuevo</a>


