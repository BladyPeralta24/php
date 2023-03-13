<?php

    /* Crear un metodo largo */

    class Metodo
    {
        const IVA = 0.21;
        const USUARIO = "id: ";

        public static int  $edad;
        public static string $nombre;
        public static string $altura;
        public static string $palabra;
        public static string $cuenta_bancaria;
        public static int $total_banco;
        public static int $descuento;



        function edad_persona(int $edad)
        {
            if ($edad >= 0 && $edad <= 3)
            {
                echo "Eres un bebe";
            }
            else if ($edad >= 4 && $edad <= 11)
            {
                echo "Eres un Niño\a";
            }
            else if ($edad >= 12 && $edad <= 17)
            {
                echo "Eres un\a adolescente";
            }
            else if ($edad >= 18 && $edad < 50)
            {
                echo "Eres un adulto";
            }
            else if ($edad >= 50 && $edad < 100)
            {
                echo "Eres un/a anciano/a";
            }
            else
            {
                echo "Eres todo un superviviente. un siglo viviendo.";
            }
        }

        function nombre_persona($nombre)
        {
            return $nombre;
        }

        function altura_persona($altura)
        {
            return $altura;
        }

        function hablar($palabra)
        {
            return $palabra;
        }
        function interactuar_con_usuario($nombre, $edad, $altura)
        {
            return $nombre;
        }
    }







    $prueba = new Metodo();

    $prueba->edad_persona(130);