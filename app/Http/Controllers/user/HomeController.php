<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Katagori;
use App\Models\Produck;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $param = $request->query('p', 'kantor');

        $katagoris = Katagori::all()->sortBy('id');

        $producks = Katagori::where('nama', $param)->first()->sub_katagori;

        return view('guest.home', compact('katagoris', 'producks'));
    }
}
