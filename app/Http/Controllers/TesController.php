<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TesController extends Controller
{
    public function grupsoal ()
    {
        $grupsoal = DB::table('grup_soal')->get();
        return view('grupsoal.grup_soal',['grupsoal' => $grupsoal]);
    }
}
