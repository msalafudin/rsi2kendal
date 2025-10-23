<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $alldata = DB::table('kamars')->select('kamars.*', 'tipekamars.namaTipe')->join('tipekamars', 'kamars.tipe', '=', 'tipekamars.id')->where('flag', 1)->get();
        $tipekamars = DB::table('tipekamars')->get();
        return view('dashboard/kamar', [
            'all_data' => $alldata,
            'tipekamars' => $tipekamars,
        ]);
    }

    public function store(Request $request)
    {
        $kmr = $request->namaKamar;
        $tipe = $request->tipeKamar;
        $terpakai = $request->terpakai;
        $total = $request->total;
        $insert = DB::table('kamars')->insert([
            'nama' => $kmr,
            'tipe' => $tipe,
            'totalBed' => $total,
            'avail' => $total - $terpakai,
            'flag' => 1,
        ]);
        if ($insert) {
            echo json_encode(['status' => true]);
        } else {
            echo json_encode(['status' => false, 'message' => 'Gagal menambahkan data kamar.']);
        }
    }

    public function showUpdate(Request $request)
    {
        $kmr = $request->fenamaKamar;
        $tipe = $request->fetipeKamar;
        $terpakai = $request->feterpakai;
        $total = $request->fetotal;

        $data = DB::table('kamars')
            // ->join('tipekamars', 'kamars.tipe', '=', 'tipekamars.id')
            ->where('id', $request->id)
            ->first();

        echo json_encode($data);
    }

    public function update(Request $request)
    {
        $kmr = $request->fenamaKamar;
        $tipe = $request->fetipeKamar;
        $terpakai = $request->feterpakai;
        $total = $request->fetotal;

        if ($total < $terpakai) {
            echo json_encode(['status' => false, 'message' => 'Total bed tidak boleh kurang dari terpakai.']);
        } else {
            DB::table('kamars')
                ->where('id', $request->idup)
                ->update([
                    'nama' => $kmr,
                    'tipe' => $tipe,
                    'totalBed' => $total,
                    'avail' => $total - $terpakai,
                ]);
            echo json_encode(['status' => true]);
        }
    }

    public function deleteData(Request $request)
    {
        DB::table('kamars')->where('id', $request->id)->update([
            'flag' => 0,
        ]);
        echo json_encode(array("status" => TRUE));
    }
}
