<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ejercicios7a9 extends CI_Controller
{


    public function index()
    {
        $this->load->view('Principal');
    }

    public function septimo()
    {
        if ($_POST) {

            $numero1 = $_POST['Num1'];
            $numero2 = $_POST['Num2'];
            $numero3 = $_POST['Num3'];
            $numero4 = $_POST['Num4'];
            $numero5 = $_POST['Num5'];
            $numero6 = $_POST['Num6'];
            $numero7 = $_POST['Num7'];
            $numero8 = $_POST['Num8'];

            $sumatoria = array($numero1, $numero2, $numero3, $numero4, $numero5, $numero6, $numero7, $numero8);

            echo "la sumatoria de los numeros, son: ", array_sum($sumatoria);
        }
    }

    public function octavo()
    {
        $numero = mt_rand(1, 20);
        $con_par = 0;
        $con_impar = 0;
        $suma_par = 0;
        $suma_impar = 0;

        for ($i = 1; $i <= $numero; $i++) {
            $numero2 = mt_rand(1, 20);
            $array[$i] = $numero2;

            echo $array[$i], "<br>";

            if ($array[$i] % 2 == 0) {
                $con_par++;
                $suma_impar = $suma_impar + $array[$i];
            } else {

                $con_impar++;
                $suma_par = $suma_par + $array[$i];
            }
        }

        echo "Total de numeros pares: ", $con_par, "<br>";

        echo "Total de la suma de numero pares: ", $suma_par, "<br>";

        echo "Total de numeros impares: ", $con_impar, "<br>";

        echo "Total de suma de numeros impares: ", $suma_impar;
    }




    public function noveno()
    {
        if (isset($_POST['numerocuadro'])) {
            $cuadros = $_POST['numerocuadro'];
            echo '<h1>INGRESE LOS NUMEROS</h1>';
            echo '<form action="noveno" method="post">';

            for ($i = 1; $i <= $cuadros; $i++) {
                echo '<input type="number" name="num[]" placeholder="ingrese el numero"><br>';
            }
            echo '<button type="submit" name="button">Enviar</button>';
            echo '</form>';
        }
        if (isset($_POST['num'])) {
            $numero = $_POST['num'];
            $con_par = 0;
            $con_impar = 0;
            $suma_par = 0;
            $suma_impar = 0;

            for ($i = 1; $i <= $numero; $i++) {
                $numero2 = mt_rand(1, 20);
                $array[$i] = $numero2;

                echo $array[$i], "<br>";

                if ($array[$i] % 2 == 0) {
                    $con_par++;
                    $suma_impar = $suma_impar + $array[$i];
                } else {
                    $con_impar++;
                    $suma_par = $suma_par + $array[$i];
                }
                break;
            }

            echo "Total de numeros pares: ", $con_par, "<br>";

            echo "Total de la suma de numero pares: ", $suma_par, "<br>";

            echo "Total de numeros impares: ", $con_impar, "<br>";

            echo "Total de suma de numeros impares: ", $suma_impar;
        }
    }
}
