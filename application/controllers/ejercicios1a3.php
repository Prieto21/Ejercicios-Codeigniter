<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ejercicios1a3 extends CI_Controller
{


    public function index()
    {
        $this->load->view('Principal');
    }
    public function primero()
    {
        $numero1 = mt_rand(1, 10); // El mt_rand: Genera un mejor número entero aleatorio//

        $numero2 = mt_rand(1, 10);
        echo "Primer numero:", $numero1;
        echo "<br>";
        echo "Segundo numero:", $numero2;
        echo "<br>";
        echo "<br>";
        echo "<br>";

        if ($numero1 < $numero2) {
            echo "el segundo numero: ", $numero2, " es mayor que el primer numero: ", $numero1;
        } elseif ($numero1 > $numero2) {

            echo "el primer numero: ", $numero1, " es mayor que el segundo numero: ", $numero2;
        } else {

            echo "Los dos numeros son iguales";
        }
    }
    public function segundo()
    {
        if ($_POST) {
            $Num = $_POST['numero'];

            switch ($Num) {
                case 1:
                    echo "Es sabado", $Num, "de septiembre del año 2018";
                    break;
                case 2:
                    echo "Es domingo", $Num, "de septiembre del año 2018";
                    break;
                case 3:
                    echo "Es lunes", $Num, "de septiembre del año 2018";
                    break;
                case 4:
                    echo "Es martes", $Num, "de septiembre del año 2018";
                    break;
                case 5:
                    echo "Es miercoles", $Num, "de septiembre del año 2018";
                    break;
                case 6:
                    echo "Es jueves", $Num, "de septiembre del año 2018";
                    break;
                case 7:
                    echo "Es viernes", $Num, "de septiembre del año 2018";
                    break;
                case 8:
                    echo "Es sabado", $Num, "de septiembre del año 2018";
                    break;
                case 9:
                    echo "Es domingo", $Num, "de septiembre del año 2018";
                    break;
                case 10:
                    echo "Es lunes", $Num, "de septiembre del año 2018";
                    break;
                case 11:
                    echo "Es martes", $Num, "de septiembre del año 2018";
                    break;
                case 12:
                    echo "Es miercoles", $Num, "de septiembre del año 2018";
                    break;
                case 13:
                    echo "Es jueves", $Num, "de septiembre del año 2018";
                    break;
                case 14:
                    echo "Es viernes", $Num, "de septiembre del año 2018";
                    break;
                case 15:
                    echo "Es sabado", $Num, "de septiembre del año 2018";
                    break;
                case 16:
                    echo "Es domingo", $Num, "de septiembre del año 2018";
                    break;
                case 17:
                    echo "Es lunes", $Num, "de septiembre del año 2018";
                    break;
                case 18:
                    echo "Es martes", $Num, "de septiembre del año 2018";
                    break;
                case 19:
                    echo "Es miercoles", $Num, "de septiembre del año 2018";
                    break;
                case 20:
                    echo "Es jueves", $Num, "de septiembre del año 2018";
                    break;
                case 21:
                    echo "Es viernes", $Num, "de septiembre del año 2018";
                    break;
                case 22:
                    echo "Es sabado", $Num, "de septiembre del año 2018";
                    break;
                case 23:
                    echo "Es domingo", $Num, "de septiembre del año 2018";
                    break;
                case 24:
                    echo "Es lunes", $Num, "de septiembre del año 2018";
                    break;
                case 25:
                    echo "Es martes", $Num, "de septiembre del año 2018";
                    break;
                case 26:
                    echo "Es miercoles", $Num, "de septiembre del año 2018";
                    break;
                case 27:
                    echo "Es jueves", $Num, "de septiembre del año 2018";
                    break;
                case 28:
                    echo "Es viernes", $Num, "de septiembre del año 2018";
                    break;
                case 29:
                    echo "Es sabado", $Num, "de septiembre del año 2018";
                    break;
                case 30:
                    echo "Es domingo", $Num, "de septiembre del año 2018";
            }
        }
    }
    public function tercero()
    {
        $numero1 = mt_rand(-30, 100);
        $numero2 = mt_rand(-30, 100);
        $numero3 = mt_rand(-30, 100);
        echo "Primer numero:", $numero1;
        echo "<br>";
        echo "Segundo numero:", $numero2;
        echo "<br>";
        echo "tercer numero:", $numero3;

        echo "<br>";
        echo "<br>";
        echo "<br>";

        if ($numero1 > 50 and $numero2 < 20 and $numero3 < -1) {
            echo "el primer numero: ", $numero1, " es mayor a 50. <br>";
            echo "el segundo numero: ", $numero2, " es menor a 20. <br>";
            echo "el tercer numero: ", $numero3, " es negativo.";
        } elseif ($numero1 > 50 and $numero3 < 20 and $numero2 < -1) {
            echo "el primer numero: ", $numero1, " es mayor a 50. <br>";
            echo "el tercer numero: ", $numero3, " es menor a 20. <br>";
            echo "el segundo numero: ", $numero2, " es negativo.";
        } elseif ($numero2 > 50 and $numero3 < 20 and $numero1 < -1) {
            echo "el segundo numero: ", $numero2, " es mayor a 50. <br>";
            echo "el tercer numero: ", $numero3, " es menor a 20. <br>";
            echo "el primer numero: ", $numero1, " es negativo.";
        } elseif ($numero2 > 50 and $numero1 < 20 and $numero3 < -1) {
            echo "el segundo numero: ", $numero2, " es mayor a 50. <br>";
            echo "el primer numero: ", $numero1, " es menor a 20. <br>";
            echo "el tercer numero: ", $numero3, " es negativo.";
        } elseif ($numero3 > 50 and $numero2 < 20 and $numero1 < -1) {
            echo "el tercer numero: ", $numero3, " es mayor a 50. <br>";
            echo "el segundo numero: ", $numero2, " es menor a 20. <br>";
            echo "el primer numero: ", $numero1, " es negativo.";
        } elseif ($numero3 > 50 and $numero1 < 20 and $numero2 < -1) {
            echo "el tercer numero: ", $numero3, " es mayor a 50. <br>";
            echo "el primer numero: ", $numero1, " es menor a 20. <br>";
            echo "el segundo numero: ", $numero2, " es negativo.";
        } elseif ($numero1 > 50 and $numero2 > 50 and $numero3 < -1) {
            echo "el primer numero: ", $numero1, " es mayor a 50. <br>";
            echo "el segundo numero: ", $numero2, " es mayor a 50. <br>";
            echo "el tercero numero: ", $numero3, " es negativo.";
        } elseif ($numero1 > 50 and $numero2 > 50 and $numero3 < 20) {
            echo "el primer numero: ", $numero1, " es mayor a 50. <br>";
            echo "el segundo numero: ", $numero2, " es mayor a 50. <br>";
            echo "el tercero numero: ", $numero3, " es menor a 20.";
        } elseif ($numero2 > 50 and $numero3 > 50 and $numero1 < -1) {
            echo "el segundo numero: ", $numero2, " es mayor a 50. <br>";
            echo "el tercer numero: ", $numero3, " es mayor a 50. <br>";
            echo "el primer numero: ", $numero1, " es negativo.";
        } elseif ($numero2 > 50 and $numero3 > 50 and $numero1 < 20) {
            echo "el segundo numero: ", $numero2, " es mayor a 50. <br>";
            echo "el tercer numero: ", $numero3, " es mayor a 50. <br>";
            echo "el primer numero: ", $numero1, " es menor a 20.";
        } elseif ($numero1 > 50 and $numero3 > 50 and $numero2 < -1) {
            echo "el primer numero: ", $numero1, " es mayor a 50. <br>";
            echo "el tercer numero: ", $numero3, " es mayor a 50. <br>";
            echo "el segundo numero: ", $numero2, " es negativo.";
        } elseif ($numero1 > 50 and $numero3 > 50 and $numero2 < 20) {
            echo "el primer numero: ", $numero1, " es mayor a 50. <br>";
            echo "el tercer numero: ", $numero3, " es mayor a 50. <br>";
            echo "el segundo numero: ", $numero2, " es menor a 20.";
        } elseif ($numero1 > 50 and $numero2 > 50 and $numero3 > 50) {
            echo "los tres numeros son mayores que 50";
        } elseif ($numero1 < 20 and $numero2 < 20 and $numero3 < 20 and $numero1 > 1 and $numero2 > 1 and $numero3 > 1) {
            echo "los tres numeros son menores que 20";
        } else {

            echo "los tres numeros son negativos";
        }
    }
}
