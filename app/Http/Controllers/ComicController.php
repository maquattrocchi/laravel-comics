<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index(){
        $data_footer = config('footer');
        $comics = config('comics');
        return view ('comics', compact('comics'), compact('data_footer'));
    }

    public function show($id){
        $data_footer = config('footer');
        $comics = config('comics');
        $comic = [];
        foreach($comics as $item){
            if($item['id'] == $id){
                $comic = $item;
            }
        }
        return view('detail', compact('comic'), compact('data_footer'));
    }
}
