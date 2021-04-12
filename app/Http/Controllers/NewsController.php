<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index(Request $request){

        $data = json_decode( file_get_contents(resource_path(). '\news.json') , true);
       // dd($data);
        $newsPapers = array_keys($data);
        $final = array();
        if ($request->has('rate-de')){
        foreach($data as $dat =>&$value){
            $rate = array_column($value['latestnews'], 'rating');
            array_multisort($rate, SORT_DESC, $value['latestnews']);
        }
    }elseif ($request->has('rate-ae')) {
        foreach($data as $dat =>&$value){
        $rate = array_column($value['latestnews'], 'rating');
        array_multisort($rate, SORT_ASC, $value['latestnews']);
        }
    }
        //dd($data);
        return view('index')->with('data', $data);
    }
}
