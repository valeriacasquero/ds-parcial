<?php
class producto {
    public $Codigo;
    public $Nombre;
    public $Precio;
    public $stock;
    public $Almacen;
    public $Categoria;



 public function MostrarDatos(){
    echo 'Codigo: '.$this->Codigo.'<br>';
    echo 'Nombre: '.$this->Nombre.'<br>';
    echo 'Precio: '.$this->Precio.'<br>';
    echo 'stock:  '.$this->stock.'<br>';
    echo 'Id Almacen: '.$this->Almacen->Id.'<br>';
    echo 'Nombre Almacen: '.$this->Almacen->Nombre.'<br>';
    echo 'Direccion Almacen: '.$this->Almacen->Direccion.'<br>';
    echo 'Id Categoria: '.$this->Categoria->Id.'<br>';
    echo 'Nombre Categoria: '.$this->Categoria->Nombre.'<br>';


 
        if ($this->stock>=100) {
        echo 'Producto en abundancia';}
        if ($this->stock>=50 and $this->stock<=100) {
        echo 'Stock moderado';}
        if ($this->stock <=50) {
        echo 'Stock bajo';}
 }
    
 
}