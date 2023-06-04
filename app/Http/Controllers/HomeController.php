<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $data = [];
    public function index(){
        $content = "Hello Le Hai Lam";
        $title = "Trang Chu";
        //c1
        // $dataView = [
        //     'titleData' => $title,
        //     'contentData' => $content
        // ];
        // return view('home', $dataView);

        //c2
        // return view('home', compact('title', 'content')); // = [title => $title, content => $content]
    
        //c3
        // return view('home')->with(['title'=>$title, 'content'=>$content]);

        // $viewHome = view('home')->render();
        // dd($viewHome);
        // return($viewHome);


        $this->data['welcome'] = 'Hoc lap trinh Laravel';

        return view('home', $this->data);
    }

    public function getNews(){
        return 'News';
    }

    public function categories($id){
        return 'Chuyen muc '.$id;
    }
    public function sum($a, $b){
        return $a + $b ; 
    }

    public function getDetailProduct($id){
        return view('client.products.detail', compact('id'));
    }
}