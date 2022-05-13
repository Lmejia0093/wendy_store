<form action="?c=categoria_guardar" method="post" >

<div class="row">
<div class="col-md-12 text-center">
<h3>Ingresar Nueva Orden</h3>
<input type="hidden" name="id_categoria" value="<?php echo $edit->id_categoria ?>">
</div>
</div>

<div class="row">
<div class="col-md-3"></div>
<div class="col-md-3">Ingresar Nombre</div>
<div class="col-md-3">
    <input type="text" name="categoria_nombre" class="form-control" value="<?php echo $edit->nombre; ?>">
</div>
<div class="col-md-3"></div>
</div>

<div class="row">
<div class="col-md-3"></div>
<div class="col-md-3">Ingresar Detalle </div>
<div class="col-md-3">
    <input type="text" name="categoria_detalle" class="form-control" value="<?php echo $edit->detalle; ?>"></div>
<div class="col-md-3"></div>
</div>

<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
    <input type="submit" name="btn_guardarcategoria" class="btn btn-block btn-success" value="guardar" > 
</div>
<div class="col-md-3"></div>
</div>


 
  
</form>

