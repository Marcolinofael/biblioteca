<?php

namespace App\Http\Controllers\Api;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClienteController extends Controller
{
   public function getCliente()
   {
        $cliente = Cliente::all();

        $this-logout(request());

        return response()->json($cliente);
   }

    public function getClienteById(Request $request)
    {

            $id = $request->get('id');

          $cliente = Cliente::find($id);
    
          if (!$cliente) {
                return response()->json(['message' => 'Cliente não encontrado'], 404);
          }
    
          return response()->json($cliente);
    }

    private function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'message' => 'Logout realizado com sucesso.'
        ]);
    }

    

}
