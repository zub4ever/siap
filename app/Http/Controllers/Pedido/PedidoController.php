<?php

namespace App\Http\Controllers\Pedido;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class PedidoController extends Controller {

    public function index(Request $request) {




        $startDate = Carbon::createFromFormat('d/m/Y', '10/10/2010');

        $endDate = Carbon::createFromFormat('d/m/Y', '10/10/2020');

        $days = $startDate->diffInDays($endDate);

        $sortedDays = [];
        for ($i = 0; $i <= $days; $i++) {
            $sortedDays[$startDate->year][] = $startDate->toDateString();
            $startDate->addDay();
        }
        ksort($sortedDays);

        //dd($sortedDays);

        return view("pedido.index", ['sortedDays' => $sortedDays]);
    }

}
