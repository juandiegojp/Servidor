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
    function calcular_resultado($oper1, $oper2, $oper) {
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
                $resul = "No entiendo qué estás haciendo.";
                break;
        }

        return $resul;
    }

    $op1 = trim($_GET['op1']);
    $op2 = trim($_GET['op2']);
    $op = trim($_GET['op']);

    $res = calcular_resultado($op1, $op2, $op);

    ?>