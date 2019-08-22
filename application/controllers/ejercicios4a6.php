<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ejercicios4a6 extends CI_Controller
{


    public function index()
    {
        $this->load->view('Principal');
    }

    public function cuarto()
    {
        $numero = mt_rand(1, 100);

        echo "el numero es:", $numero;
        echo "<br>";
        echo "<br>";
        echo "<br>";

        if ($numero % 2 == 0) {
            echo "el $numero es par";
        } else {
            echo "el $numero es impar";
        }
    }

    public function quinto()
    {
        $numero1 = mt_rand(1, 10);

        $numero2 = mt_rand(1, 10);
        echo "Primer numero:", $numero1;
        echo "<br>";
        echo "Segundo numero:", $numero2;
        echo "<br>";
        echo "<br>";
        echo "<br>";

        if ($numero1 > $numero2 and $numero1 % 2 == 0) {

            echo $numero1, " es par y mayor que ", $numero2, " que es impar";
        } elseif ($numero1 < $numero2 and $numero1 % 2 == 0) {

            echo $numero1, " es par y menor que ", $numero2, " que es impar";
        } elseif ($numero2 < $numero1 and $numero2 % 2 == 0) {

            echo $numero2, " es par y menor que ", $numero1, " que es impar";
        } elseif ($numero2 > $numero1 and $numero2 % 2 == 0) {

            echo $numero2, " es par y menor que ", $numero1, " que es impar";
        } elseif ($numero1 == $numero2 and $numero1 % 2 == 0) {

            echo "los dos numeros son iguales pero ", $numero1, "es par y ", $numero2, "es impar";
        } elseif ($numero1 == $numero2 and $numero2 % 2 == 0) {

            echo "los dos numeros son iguales pero ", $numero2, "es par y ", $numero1, "es impar";
        } elseif ($numero1 != $numero2 and $numero2 % 2 == 0 and $numero1 % 2 == 0) {

            echo "los dos numeros son diferentes pero ambos son par";
        }
        
        elseif ($numero1 == $numero2 and $numero2 % 2 == 0 and $numero1 % 2 == 0) {

            echo "los dos numeros son iguales y ambos son pares ";
        } 
    }

    public function sexto()
    {
        if ($_POST) {
            $Num1 = $_POST['1'];
            $Num2 = $_POST['2'];
            $Num3 = $_POST['3'];
            $Num4 = $_POST['4'];
            $Num5 = $_POST['5'];
            $Num6 = $_POST['6'];
            $Num7 = $_POST['7'];
            $Num8 = $_POST['8'];
            $Num9 = $_POST['9'];
            $Num10 = $_POST['10'];
            $Num11 = $_POST['11'];
            $Num12 = $_POST['12'];
            $Num13 = $_POST['13'];
            $Num14 = $_POST['14'];
            $Num15 = $_POST['15'];
            $Num16 = $_POST['16'];
            $Num17 = $_POST['17'];
            $Num18 = $_POST['18'];
            $Num19 = $_POST['19'];
            $Num20 = $_POST['20'];
            $Num21 = $_POST['21'];
            $Num22 = $_POST['22'];
            $Num23 = $_POST['23'];
            $Num24 = $_POST['24'];
            $Num25 = $_POST['25'];

            $suma = $Num1 + $Num1 + $Num2 + $Num3 + $Num4 + $Num5 + $Num6 + $Num7 + $Num8 + $Num9 + $Num11 + $Num12 + $Num13 + $Num14 + $Num15 + $Num16 + $Num17 + $Num18 + $Num19 + $Num20 + $Num21 + $Num22 + $Num23 + $Num24 + $Num25;
            $promedio = $suma / 25;

            echo "El promedio del salon es: ", $promedio;
        }
    }
}
