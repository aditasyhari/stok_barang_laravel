<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\stok_barang;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $stok_barangs = DB::table('stok_barangs')->orderBy('tanggal','desc')->get();
        return view('/stok/stok_barang',['stok_barangs' => $stok_barangs]);
        //return view('home');
    }
}
