<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\data_pembeli;
use App\riwayat_pembelian;
use App\stok_barang;
use App\BarangMasuk;
Use App\Pembelian;

class DashboardController extends Controller
{
    public function index()
    {
        $barang_expired = BarangMasuk::where('tanggal_expired', '<', Carbon::now())->get();
        $stok_barangs = stok_barang::all();
        $count = stok_barang::count();
        $total = stok_barang::sum('jumlah_barang');
        $pembelians = Pembelian::orderBy('id', 'desc')->get();
        $barang_masuk = BarangMasuk::orderBy('created_at', 'desc')->get();

        return view('/dashboard/dashboard', compact(['pembelians','stok_barangs','count','total','barang_masuk']));   
    }

}
