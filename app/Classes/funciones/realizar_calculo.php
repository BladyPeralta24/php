<?php

function realizar_calculo(array $arreglo, int $modalidad)
{
    $resultado = "";
    if ($resultado !== false and is_numeric($modalidad)) 
    {
        if ($modalidad == 1)
        {
            $resultado = 0;
            foreach ($arreglo as $numero)
            {
                if (is_numeric($numero))
                {
                    $resultado += $numero;
                }
                else
                {
                    $resultado = false;
                    break;
                }
            }
        } 
        else if ($modalidad == 2) 
        {
            sort($arreglo);
            $resultado = $arreglo;
        }
        else if ($modalidad == 3)
        {
            $resultado = array_reverse($arreglo);
        } 
        else 
        {
            $resultado = false;
        }
    } 
    else 
    {
        $resultado = false;
    }
    return $resultado;
}

