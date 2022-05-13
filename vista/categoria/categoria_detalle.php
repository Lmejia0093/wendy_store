<title>Categorias</title>

<a href="?c=categoria_nueva" class="btn btn-success">Nueva Categoria</a>
<table class="table table-bordered">
  <caption>Categorias</caption>
  <thead class="thead-dark">
    <tr>
      <th>#</th>
      <th>nombre</th>
      <th>Detalle</th>
      <th>Accion</th>
         
    </tr>
  </thead>
  <tbody>
    <?php foreach ($this->dato->listar_categoria() as $k) : ?>
    <tr>
      
      <td><?php echo $k->id_categoria;  ?></td>
      <td><?php echo $k->nombre;  ?></td>
      <td><?php echo $k->detalle;  ?></td>
      <td>
        <a href="?c=elimiar_categoria&id=<?php echo $k->id_categoria ?>" title="elimiar" class="btn btn-danger">Eliminar</a>
        
        <a href="?c=categoria_nueva&id=<?php echo $k->id_categoria ?>" title="Editar" class="btn btn-warning" >Editar</a>
        
      </td>
   
      
    </tr>
  <?php  endforeach;  ?>
    
 
  </tbody>
</table>