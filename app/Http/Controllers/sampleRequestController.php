<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sampleRequestController extends Controller
{
    public function form(){
        return view('form');
    }

    public function queryStrings(Request $request){

        $keyword = "未設定";
        if ($request->has('keyword')) {
            $keyword = $request->keyword;
        }
        return "キーワードは「{$keyword}」です";
    }
}
