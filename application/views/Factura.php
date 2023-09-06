<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $titulo; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
  <div>
    <h3>Factura Electronica</h3>
    <form class="form-group" action="<?php echo site_url('index/guardarEmpleado') ?>" method="post">
      <label for="nofactura">Número de Factura</label>
      <input class="form-control" type="text" name="NoFactura" value="" placeholder="Número de factura" required>
      <label for="nit">Nit</label>
      <input class="form-control" type="text" name="Nit" value="" placeholder="Ingrese el Nit" required>
      <label for="fecha">Fecha</label>
      <input class="form-control" type="number" name="Fecha" value="" placeholder="Ingrese Fecha" required>
      <label for="tipodepago">Tipo de Pago</label>
      <input class="form-control" type="text" name="Tipodepago" value="" placeholder="Ingrese el Tipo de pago" required>
      <label for="direccion">Direccion</label>
      <input class="form-control" type="text" name="Direccion" value="" placeholder="Ingrese direccion completa" required>
      <label for="idsucursal">Sucursal</label>
      <input class="form-control" type="text" name="IdSucursal" value="" placeholder="Ingrese Sucursal" required>
      <label for="codempleado">Vendedor No.</label>
      <input class="form-control" type="text" name="CodEmpleado" value="" placeholder="Ingrese Codigo" required>
      <label for="codempleado">Vendedor No.</label>
      <input class="form-control" type="text" name="CodEmpleado" value="" placeholder="Ingrese Codigo de empleado" required>
      <button class="btn btn-primary" type="submit">Grabar</button>
      <h3>Detalle</h3>
      <label for="idetalle">No.</label>
      <input class="form-control" type="text" name="IdDetalle" value="" placeholder="No. Venta" required>
      <label for="idproducto">Producto</label>
      <input class="form-control" type="text" name="IdProducto" value="" placeholder="Producto" required>
      <label for="cantidad">Cantidad</label>
      <input class="form-control" type="text" name="Cantidad" value="" placeholder="Cantidad" required>
      <label for="precio">Precio</label>
      <input class="form-control" type="text" name="Precio" value="" placeholder="Precio" required>
      <label for="total">Total</label>
      <input class="form-control" type="text" name="Total" value="" placeholder="Total" required>
      <button class="btn btn-primary" type="submit">Grabar</button>
      
    </form>
  </div>
</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

