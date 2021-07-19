<?php

namespace App\Http\Controllers\Endereco;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddressFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Serve;
use App\Address;
use App\City;
use App\State;

class EnderecoController extends Controller {

    public function index() {
        $address = DB::table('address')->get()->all();
        $servidor = DB::table('serve')->get()->all();
        $city = DB::table('city')->get()->all();

        return view("endereco.index", compact('address','servidor', 'city'));
    }

    public function create() {

        $servidor = Serve::all();
        $state = State::all();
        $city = City::all();
        return view('endereco.create', compact('servidor', 'city', 'state'));
    }

    public function store(AddressFormRequest $request) {
        DB::beginTransaction();

        $address = Address::create($request->all());

        if (!$address) {
            DB::rollBack();
            return redirect()->route('endereco.index')->with('error', "Falha ao cadastrar uma lotação.");
        }

        $address->save();

        DB::commit();

        return redirect()->route('endereco.index')->with(
                        'success',
                        "Lotação cadastrada com sucesso."
        );
    }

}
