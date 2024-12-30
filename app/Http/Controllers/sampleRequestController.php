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

    public function profile($id){
        return 'ID'.$id;
    }

    public function productsArchive(Request $request, $category, $year){
        return 'カテゴリー:'.$category.'<br>年:'.$year.'<br>ページ:'.$request->get('page',1);
    }
}
