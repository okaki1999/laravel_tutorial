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
        return 'IDは'.$id;
    }

    public function productsArchive(Request $request, $category, $year){
        return 'カテゴリー:'.$category.'<br>年:'.$year.'<br>ページ:'.$request->get('page',1);
    }

    public function routeLinks(){
        $url = route('profile', ['id' => 1,'photos'=>'yes']);
        return 'プロフィールページのURL:'.$url;
    }

    public function loginFrom(){
        return view('login');
    }

    public function login(Request $request)
{
    if ($request->get('email') === 'user@example.com' && $request->get('password') === '12345678') {
        return 'ログイン成功';
    }
    return 'ログイン失敗';
}
}
