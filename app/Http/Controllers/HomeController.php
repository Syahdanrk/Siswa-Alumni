<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

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

    public function countData()
    {
        $countData = Data::count();
        // Menghitung jumlah data yang melanjutkan ke "Kerja"
        $countKerja = Data::where('lanjut', 'Kerja')->count();

        // Menghitung jumlah data yang melanjutkan ke "Kuliah"
        $countKuliah = Data::where('lanjut', 'Kuliah')->count();

        return view ('Pages.Dashboard.dashboard', compact('countData', 'countKerja', 'countKuliah'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
