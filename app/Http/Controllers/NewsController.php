<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index(){

        $data = json_decode( file_get_contents(resource_path(). '\news.json') , true);
        $newsPapers = array_keys($data);
        $final = array();

        foreach($data as $dat =>$value){
            foreach($value as $da){
                $final[] = $da;
               // $final[$newsPapers[$dat]] = $da;

            }
        }
        //dd($final);
        return view('index')->with('data', $final);
    }
}
