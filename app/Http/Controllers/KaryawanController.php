<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use App\Events\KaryawanCreated;

class KaryawanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->expectsJson()) {
            $data = Karyawan::latest()->get();
            return response()->json(['data' => $data], 200);
        }

        return view('karyawan.index');
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        Karyawan::create([
            'nama' => $request->nama,
            'nik' => $request->nik
        ]);

        KaryawanCreated::dispatch();

        return redirect()->back();
    }
}
