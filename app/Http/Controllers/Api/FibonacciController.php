<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FibonacciController extends Controller
{
    /**
     * Algoritmo que calcula el valor Fibonacci de un índice N
     * @param Request $request
     * @return JsonResponse
     */
    public function getFibonacci(Request $request): JsonResponse
    {
        $n = $request->n;
        if($n!=null && is_numeric($n)){
            //Se inicia la serie con los dos primeros números obligatorios
            $fibonacci  = [0,1];

            //Se crea un ciclo repetitivo que inicia en la posición 2 y termina en el índice que indica el usuario
            //Se agrega a la lista un nuevo número que corresponde a la suma de los dos números anteriores en dicha lista
            for($i=2;$i<=$n;$i++)
            {
                $fibonacci[] = $fibonacci[$i-1]+$fibonacci[$i-2];
            }

            //Se retorna una respuesta tipo Json la cual corresponde al formato de respuesta de las API's
            return response()->json([
                'message' => 'El valor Fibonacci al que corresponde el indice '.$n.' es: '.$fibonacci[$n]
            ]);
        }else{
            return response()->json([
                'message' => 'Debe ingresar un número',

            ],403);
        }
    }
}
