<?php
    /**
     * @author Juan Diego Jurado Pimentel
     * @copyright Copyright (C) 2022 Juan Diego Jurado Pimentel
     * @license https://www.gnu.org/licenses/gpl.txt
     */


     
    /**
     * Calcula el resultado de hacer la operación de $oper
     * sobre los argumentos $oper y $oper2.
     * 
     * @param   mixed   $oper1 El primer operando.
     * @param   mixed   $oper2 El segundo operando.
     * @param   string  $oper El operador.
     *                  Valores válidos ('+', '-', '*', '/')
     * @return mixed    El resultado del calculado.
     */

    function calcular_resultado(float $oper1,float $oper2,string $oper): ?float {
        switch ($oper) {
            case '+':
                $resul = $oper1 + $oper2;
                break;

            case '-':
                $resul = $oper1 - $oper2;
                break;

            case '*':
                $resul = $oper1 * $oper2;
                break;

            case '/':
                $resul = $oper1 / $oper2;
                break;

            default:
                $error[] = "Error: Operación incorrecta.";
                break;
                return null;
        }

        return $resul;
    }


    function mostrar_errores(array $error): void

    {
        
    }