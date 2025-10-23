<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PublicController extends Controller
{
    public function kamar()
    {
        // $kamar = DB::table('tipekamars')->select('kamars.totalBed', 'kamars.avail', 'tipekamars.namaTipe', DB::raw('SUM(totalBed) as totalSemuaBed'), DB::raw('SUM(avail) as totalAvail'))
        // $kamar = DB::table('tipekamars')->select('kamars.totalBed', 'kamars.avail', 'tipekamars.namaTipe')
        // ->join('kamars', 'tipekamars.id', '=', 'kamars.tipe')
        // ->where('flag', 1)
        // ->groupBy('kamars.tipe')
        // $kamar = DB::table('kamars')
        // ->selectRaw('SUM(kamars.totalBed) as totalBed')
        // ->selectRaw('SUM(kamars.avail) as tersedia')
        // ->join('tipekamars', 'tipekamars.id', '=', 'kamars.tipe')
        // ->where('flag', 1)->get();
        $kamar = DB::table('tipekamars')
        ->select('tipekamars.namaTipe')
        ->selectRaw('SUM(kamars.totalBed) as totalBed')
        ->selectRaw('SUM(kamars.avail) as tersedia')
        ->join('kamars', 'tipekamars.id', '=', 'kamars.tipe')
        ->orderBy('tipekamars.id', 'asc')
        ->where('flag', 1)
        ->groupBy('kamars.tipe')
        ->get();
        return view('main-page/kamar', [
            'kamar' => $kamar,
        ]);
    }
}
