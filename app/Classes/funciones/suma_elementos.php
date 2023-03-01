<?php

    function tratar_elementos($arreglo)
    {
        $resultado = 0;
        foreach ($arreglo as $value)
        {
            if ($value % 1 == 0)
            {
                $resultado -= $value; 

            }
            else
            {
                $resultado += $value;
            }
        }
        return $resultado;
    } 



    $variable = arreglo(1,2,3,4,5);

    echo tratar_elementos($variable);