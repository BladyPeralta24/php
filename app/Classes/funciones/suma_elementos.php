<?php

    function tratar_elementos($array)
    {
        $resultado = 0;
        foreach ($array as $value)
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



    $variable = array(1,2,3,4,5);

    echo tratar_elementos($variable);