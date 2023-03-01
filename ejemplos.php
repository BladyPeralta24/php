<?php

    require "includes/cuerpo.php";


    if($_GET['pagina'] == 'secundaria')
    {
        echo cabecera("Mi página Secundaria");
    }
    else
    {
      echo cabecera("Mi página de Inicio");
    }
        

    echo '<h2>'. $_GET['nombre']. '</h2>';
    echo '<h2>'. $_GET['color']. '</h2>';

    /*
    $colores['rojo'] = '#FF0000';
    $colores['verde'] = '#00FF00';
    $colores['azul'] = '#0000FF';
    */


    $colores = array(
       'rojo' => '#ff0000'
      ,'verde' => '#00FF00'
      ,'azul' => '#0000FF'
    );

    echo '<pre>';
    var_dump($colores);
    echo '</pre>';


    foreach($colores as $clave => $codigo_color)
    {
        echo "{$clave} => {$codigo_color} <br />";

    }

    $cadena = "13241242134";


    $segunda_variable = &$cadena;


    $segunda_variable = "CCCCCCCCCCCC";

    $nombre++;

    $cadena_texto = "Hola Mundo";

    $cadena_texto = 'F';

    /*<?php

    // imprimir por pantalla con variables
    // $nombre = "Blady";
    // echo "Hola mundo {$nombre} <br/>" . PHP_EOL;
    // echo "Hola mundo {$nombre} <br/>" . PHP_EOL;
    // echo "Hola mundo {$nombre} <br/>" . PHP_EOL;
    // echo "Hola mundo {$nombre} <br/>" . PHP_EOL;
    // echo "Hola mundo {$nombre} <br/>" . PHP_EOL;

    // condicion if
    if (true)
    {

    }
    else
    {

    }

    // bucle while
    $contenido = "<ul>";
    /*$i = 0;
    while($i < 10)
    {
        $contenido .= "<li>Elemento {$i}</li>";
        $i++;

    }

    // bucle for
    for ($i=0;$i<10;$i++)
    {
        $contenido .= "<li>Elemento {$i}</li>";
    }

    $contenido .= "</ul>";

    echo $contenido;


    $pokemons[] = "Pikachu";
    $pokemons[] = "Charmander";
    $pokemons[] = "Alacazam";

    echo $pokemons;

    foreach($pokemons as $iterador => $nombre_pokemon)
    {
        echo $iterador . ' => '. $nombre_pokemon . '</br>';
    }*/





//TODO: Clases en PHP

//     <?php


//   require_once "/includes/clases/plantilla.php";



// class Animal
// {

//   private $tipo;

//   function __construct($tipo)
//   {

//     $this->tipo = $tipo;

//   }



// }


// class Persona extends Animal
// {

//   var $nombre, $apellidos, $edad;


//   protected $ccc;


//   function __construct($nombre,$apellidos,$edad=18)
//   {

//     $this->nombre = $nombre;
//     $this->apellidos = $apellidos;
//     $this->edad = $edad;

//     $this->ccc = 'ES2589734921437290817491287412';

//     parent::__construct("Humano");

//     $this->tipo = "AAAAAAA";

//   }



//   function mi_nombre_completo()
//   {
//     return "Nombre: {$this->nombre} Apellidos: {$this->apellidos}";
//   }


//   private function ccc()
//   {
//     return $this->ccc;
//   }

//   function tipo()
//   {
//     return $this->tipo;
//   }


//   function __call($param, array $arguments)
//   {

//     echo $param;

//     var_dump($arguments);

//   }

// }





// $andres = new Persona("Andrés", "García de León");


// echo $andres->tipo2("hola","adios");