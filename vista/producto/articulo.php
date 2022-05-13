 <?php foreach ($this->dato->listar() as $k) : ?>
<div class="col-xs-12 col-sm-6 col-md-4">
      <h2><?php echo $k->nombrearticulo;  ?></h2>
      <figure></figure><!-- Especificar contenido gráfico Ej: Una Imagen -->
      <p>mensaje: <?php echo $k->mensaje; ?></p>
      <a href="#" class="btn btn-success"><?php echo $k->paisorigen; ?></a>
 </div>
 <?php endforeach; ?>