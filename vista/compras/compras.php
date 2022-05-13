<title>Ordenes de Venta</title>

<a href="?c=pedido_nuevo" class="btn btn-success">Nueva Orden</a>
<table class="table table-bordered">
  <caption>Ordenes de venta</caption>
  <thead class="thead-dark">
    <tr>
      <th>#orden</th>
      <th>nombre</th>
      <th>Contacto</th>
      <th>Lugar de entrega</th>
      <th>Fecha</th>
      <th>Hora</th>
      <th>Tipo de Producto</th>
      <th>Precio</th>
      <th>Precio envio</th>
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