<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsuariosRequest;
use App\Models\UsuariosModel;
use Exception;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{


    public function index()
    {
        $todosUsuarios = UsuariosModel::paginate(6);
        return view('usuarios.index', ['todosUsuarios' => $todosUsuarios]);
    }

    public function search(Request $request)
    {
        $todosUsuarios =  UsuariosModel::where([
            ['id', '>', '0'],
            ['nome', 'LIKE', '%' . $request->nome . '%'],
            ['login', 'LIKE', '%' . $request->login . '%'],
            ['email', 'LIKE', '%' . $request->email . '%']
        ])->paginate(6);

        return view('usuarios.index', ['todosUsuarios' => $todosUsuarios]);
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(UsuariosRequest $request)
    {
        try {

            $hash = Hash::make($request->senha);

            $store = UsuariosModel::create([
                'nome' => $request->nome,
                'login' => $request->login,
                'senha' => $hash,
                'email' => $request->email,
                'tipo' => $request->tipo,
                'ativo' => $request->ativo,
            ]);
            if ($store) {
                return view('usuarios.create', ['messageSuccess'=> 'Cadastro realizado com sucesso!']);
            }
        } catch (Exception $e) {
            return view('usuarios.create', ['dbException' => $e->getMessage()]);
        }
    }



    public function edit($id)
    {
        $usuario = UsuariosModel::findOrFail($id);
        return view('usuarios.edit', ['usuario' => $usuario]);
    }


    public function update(UsuariosRequest $request, $id)
    {
        try {
            UsuariosModel::where(['id' => $id])->update([
                'nome' => $request->nome,
                'login' => $request->login,
                'senha' => $request->senha,
                'email' => $request->email,
                'tipo' => $request->tipo,
                'ativo' => $request->ativo
            ]);
        } catch (Exception $e) {

            echo  $e->getMessage();
        }

        return view('usuarios.create', ['messageSuccess'=> 'Cadastro atualizado com sucesso!']);
    }


    public function destroy($id)
    {
        $destroy = UsuariosModel::destroy($id);
        if ($destroy) {
            return redirect('/usuarios');
        }
    }
}
