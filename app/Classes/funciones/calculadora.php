<?php
    function calculadora(int $operando1, int $operando2, string $operacion)
    {
        $resultado = 0;
        if ($operacion == '+')
        {
            $resultado = $operando1 + $operando2;
        }
        else if ($operacion == '-')
        {
            $resultado = $operando1 - $operando2;
        }
        else if ($operacion == '*')
        {
            $resultado = $operando1 * $operando2;
        }
        else if ($operacion == '/')
        {
            $resultado = $operando1 / $operando2;
        }
        else
        {
            return false;
        }
        return $resultado;
    }

    echo calculadora(2,3,5);