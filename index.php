<?php

    require_once "include/clases/plantilla.php";

    
    $plantilla = new Plantilla();

    echo $plantilla->cabecera("Mi web de Pokemons");


    if($_GET['pagina'])
    {
        $numero = $_GET['pagina'] - 1;

        $url = "https://pokeapi.co/api/v2/pokemon/?offset=".($numero)."&limit=20";
    }
    else
    {
        $url = "https://pokeapi.co/api/v2/pokemon/";
    }


    $pokemon_api = file_get_contents($url);
    $pokemons = json_decode($pokemon_api,true);

    
    foreach ($pokemons['results'] as $pokemon) {

        $pokemon_api = file_get_contents($pokemon['url']);

        $pokemon_api = json_decode($pokemon_api, true);

        $img_src = $pokemon_api['sprites']['front_default'];
        $img_src_gif = $pokemon_api['sprites']['back_default'];

        echo "<li class='list-group-item'>";
        echo "<img src='" . $img_src . "' alt='" . $pokemon['name'] . "'>";
        echo "<img src='" . $img_src_gif . "' alt='" . $pokemon['name'] . "'>";
        if(isset($pokemon_api['sprites']['front_shiny'])){
            $gif_src = $pokemon_api['sprites']['front_shiny'];
            echo "<img src='" . $gif_src . "' alt='" . $pokemon['name'] . " shiny '>";
          };
        echo $pokemon['name'];
        echo "</li>";
    }
    
    
    echo "<a href=\"?pagina=20\">Anterior</a>";
    echo "<a href=\"?pagina=20\">Siguiente</a>";

    echo $plantilla->pie_de_pagina();

