<?php
require_once  'modelo/almacen.php';
require_once   'modelo/categoria.php';
require_once   'modelo/producto.php';

$c= new categoria();
$c->Id=1;
$c->Nombre='Iluminacion';

$a= new almacen();
$a->Id=1;
$a->Nombre= 'Almacen principal';
$a->Direccion= 'Av. Libertador 123';

$p= new producto();
$p->Codigo= 1234;
$p->Nombre= 'Lámpara LED';
$p->Precio= '$25.99';
$p->stock= $_GET ['stock'];
$p->Almacen= $a;
$p->Categoria= $c;

$p->MostrarDatos();



