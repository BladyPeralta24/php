<?php
  class Producto {
    private $nombre;
    private $precio;

    public function __construct($nombre, $precio) {
      $this->nombre = $nombre;
      $this->precio = $precio;
    }

    public function getNombre() {
      return $this->nombre;
    }

    public function getPrecio() {
      return $this->precio;
    }
  }

  class Carrito {
    private $productos;

    public function __construct() {
      $this->productos = [];
    }

    public function agregarProducto(Producto $producto) {
      $this->productos[] = $producto;
    }

    public function calcularTotal() {
      $total = 0;
      foreach ($this->productos as $producto) {
        $total += $producto->getPrecio();
      }
      return $total;
    }
  }

  class Factura {
    private $carrito;

    public function __construct(Carrito $carrito) {
      $this->carrito = $carrito;
    }

    public function imprimirFactura() {
      $total = $this->carrito->calcularTotal();
      echo "Factura:\n";
      foreach ($this->carrito->getProductos() as $producto) {
        echo $producto->nombre . ": $" . $producto->precio . "\n";
      }
      echo "Total: $" . $total . "\n";
    }
  }
?>