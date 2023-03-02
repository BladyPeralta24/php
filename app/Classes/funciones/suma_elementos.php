<?php

    function tratar_elementos(array $arreglo)
    {
        $resultado = 0;
        foreach ($arreglo as $clave => $valor)
        {
            if (!is_int($valor))
            {
                return false;
            }
            else if ($clave % 2 == 0)
            {
                $resultado += $valor; 
            }
            else
            {
                $resultado -= $valor;
            }
        }
        return $resultado;
    } 
