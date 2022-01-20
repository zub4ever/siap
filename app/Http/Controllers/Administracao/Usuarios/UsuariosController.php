<?php

namespace App\Http\Controllers\Administracao\Usuarios;

use App\Http\Controllers\Controller;
use App\Http\Requests\Usuarios\UserFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PDF;
use Carbon\Carbon;
use Gate;


class UsuariosController extends Controller {

    public function index() {
        
        $usuarios = User::where('status',1)
                ->orderBY('id')
                ->get();
        
        return view("administracao.usuarios.index", compact('usuarios'));
    }
    
    public function criar() {
        return view("administracao.usuarios.criar");
    }
    
    

    public function create(array $data){
        
       return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);

        
        return view('administracao.usuarios.create');
        
    }

    public function store(Request $request) {        
         
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
        
       

        return redirect()->route('usuarios.index')->with(
            'success',
            "Usuário cadastrado com sucesso."
        );
    }
    /*
    public function edit($id) {

        $atendimentos = Atendimento::findOrFail($id);
        return view('administracao.atendimentos.edit', compact('atendimentos'));
    }

    public function update(AtendimentoFormRequest $request, $id) {
        $atendimentos = Atendimento::findOrFail($id);

        DB::beginTransaction();

        if (!$atendimentos->update($request->all())) {

            DB::rollBack();
            return redirect()->route('atendimentos.index')->with('error', "Falha em alterar o atendimento.");
        }

        DB::commit();

        return redirect()->route('atendimentos.index')->with(
                        'success',
                        "Atendimento alterado com sucesso."
        );
    }

    public function Verpdf($id) {
        $atendimentos = Atendimento::findOrFail($id);
        return \PDF::loadView('administracao.atendimentos.pdf.Verpdf',
                                compact('atendimentos')
                        )
                        ->setPaper('A4', 'portrait')
                        ->stream();
    }

    public function destroy($id)
    {
        
        $atendimentos = Atendimento::findOrFail($id);


        DB::beginTransaction();

        if (!$atendimentos->update(['status'=> 0])) {
            DB::rollBack();
            return redirect()->route('atendimentos.index')->with('error', "Falha ao deletar o Atendimento.");
        }

        DB::commit();

        return redirect()->route('atendimentos.index')->with(
            'success',
            "Atendimento deletado com sucesso."
        );
    } */

}
