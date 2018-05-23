<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PedidoApiController extends Controller
{
    public function getComidas() {
        $comidas = \App\Comida::all();
        return $comidas;
    } 

    public function getPedidosUsuario($idUsuario) {
        $pedidos =
            \App\Pedido::where('idUsuario','=',$idUsuario)
                ->get();
        return $pedidos;
    }

    public function getMedicina($idMedicina){
        $medicina =
            \App\Comida::where('id','=',$idMedicina)
                ->get();
        return $medicina;
    }

    public function getMarca($idMarca){
        $medicina =
            \App\Marca::where('id','=',$idMarca)
                ->get();
        return $marca;
    }


}