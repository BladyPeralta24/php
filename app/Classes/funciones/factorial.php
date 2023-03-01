<?php

    // function factorial($numero){
    //     $resultado = 1;
    //     while ($numero > 1){
    //         $resultado *= $numero;
    //         $numero --;
    //     }
    //     return $resultado;
    // }

    function factorial($numero){
        $resultado = 1;
        if ($numero > 1)
        {
            if (is_float($numero))
            {
                $resultado = -1;
            }
            else
            {
                while ($numero > 1)
            {
                $resultado *= $numero;
                $numero --;
            }
            }
            
        }
        else
        {
            if (($numero == 1) or ($numero == 0))
            {
                $resultado = 1;
            }
            else
            {
                if ($numero < 0)
                {
                    $resultado = -1;
                }
            }
        }
        
        return $resultado;
    }
