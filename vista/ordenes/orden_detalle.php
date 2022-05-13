<title>Ordenes de Venta</title>

<a href="?c=pedido_nuevo" class="btn btn-success">Nueva Orden</a>
<table class="table table-bordered">
  <caption>Ordenes de venta</caption>
  <thead class="thead-dark">
    <tr>
      <th>#</th>
      <th>nombre</th>
      <th>Contacto</th>
      <th>Estado</th>
      <th>Accion</th>
         
    </tr>
  </thead>
  <tbody>
    <?php foreach ($this->pedido->listar_ordenes() as $k) : ?>
    <tr>
      
      <td><?php echo $k->id_orden;  ?></td>
      <td><?php echo $k->nombre;  ?></td>
      <td><?php echo $k->contacto;  ?></td>
      <td><?php echo $k->estado;  ?></td>
      <td>
        <a href="?c=elimiar_categoria&id=<?php echo $k->id_orden ?>" title="elimiar" class="btn btn-danger">Eliminar</a>
        
        <a href="?c=categoria_nueva&id=<?php echo $k->id_orden ?>" title="Editar" class="btn btn-warning" >Editar</a>
        
      </td>
   
      
    </tr>
  <?php  endforeach;  ?>
    
 
  </tbody>
</table>