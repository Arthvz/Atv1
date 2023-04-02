<?php

  namespace App\Http\Controllers;

  use APP\Models\User;

  class CalculoController extends Controller{

    public function conta (int $x , int $y, String $operacao){

      switch($operacao){

        case 'todos':

          $adicao = $x + $y;

          $subtracao = $x - $y;

          $divisao = $x / $y;

          $multiplicacao = $x * $y;

          echo "Adição : " . $adicao.'<br>'

            . "Subtração : " . $subtracao.'<br>'

            . "Divisão : "  . $divisao.'<br>'

            . "Multiplicação : " . $multiplicacao.'<br>';

            break;

        case 'soma':

          $resultado = $x + $y;

          echo 'O Resultado dessa operação é: ' . $resultado;

          break;

        case 'subtração':

          $resultado = $x - $y;

          echo 'O Resultado dessa operação é: ' . $resultado;

          break;

        case 'divisão':

          $resultado = $x / $y;

          echo 'O Resultado dessa operação é: ' . $resultado;

          break;

        case 'multiplicação':

          $resultado = $x * $y;

          echo 'O Resultado dessa operação é: ' . $resultado;

          break;

          default;

          echo 'Operação inválida... Digite alguma das operações abaixo: <br><br> soma <br> subtração <br> multiplicação <br> divisão <br><br><br> Se quiser ver todas, digite: todos';

        };
    }
  }