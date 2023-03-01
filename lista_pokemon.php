<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>Pokemon Page</title>
</head>
<body>

<ul class = "list-group">
    <?php


        $url = "https://pokeapi.co/api/v2/pokemon/";
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
        


        /*echo '<pre>';
        var_dump($pokemons);
        echo '</pre>';*/


    ?>
</ul>
</body>
</html>