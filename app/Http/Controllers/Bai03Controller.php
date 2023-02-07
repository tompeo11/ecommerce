<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bai03Controller extends Controller
{
    //
    public function tuyensinh(){
        return view('v_tuyensinh');
    }

    public function xulytuyensinh(Request $request){
        $toan = $request -> post('toan');
        $ly = $request -> post('ly');
        $hoa = $request -> post('hoa');
        $kv = $request -> post('kv');
        return view('v_tuyensinh') -> with(['toan'=>$toan,'ly'=>$ly,'hoa'=>$hoa,'kv'=>$kv]);
    }
}
