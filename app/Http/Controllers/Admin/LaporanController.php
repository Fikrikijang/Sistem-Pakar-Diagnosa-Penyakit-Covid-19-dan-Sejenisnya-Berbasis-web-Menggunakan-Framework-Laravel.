<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\User;
use App\Pasien;
use App\Gejala;
use App\TempDiagnosa;
use App\Diagnosa;
use App\Penyakit;

class LaporanController extends Controller
{
    public function index()
    {
        $diagnosa = Diagnosa::all();
        return view('admin.laporan', compact('diagnosa'));
    }

    public function show($id)
    {
    }

    public function update(Request $request, $id)
    {
    }
}
