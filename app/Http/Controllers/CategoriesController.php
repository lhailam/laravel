<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function _construct(){

    }

    public function index(Request $request){
        // $requestData  = $request->all();
        // echo $requestData['id'];
        // dd($requestData);
        // return view('client/categories/list');

        // $server = $request->server();
        // dd($server);

        // $header = $request->header('connection');
        // dd($header);
        // $getAll = $request->all();

        // $input = $request->input('id.*.name');
        // echo $input;
        // dd($getAll);
        // dd($input);

        // $id = $request->id[0];
        // dd($id);

        $query = $request->query();
        dd($query['id'][0]['name']);

    }
    public function getCategory($id){
        return  "ID ".$id;
    }

    public function updateCategory($id){
        return view('client/categories/edit');
    }

    //show form 
    public function addCategory(Request $request){
        // $cateName = $request->old('category_name');
        return view('client/categories/add');
    }
    // xu ly
    public function handleCategory(Request $request){
        $dataForm = $request->category_name;
        $request->flash();

        // echo $dataForm['category_name'];
        // dd($dataForm);
        return redirect(route('categories.add'));
    }

    public function deleteCategory(){
    }

    public function httpRequest(){
        print_r($_POST);
    }

    public function showFormUpload(){
        return view('client/categories/upload');
    }

    public function uploadfile(Request $request){
        if($request->hasFile('photo')){
            if($request->photo->isValid()){
                $file = $request->photo;
                $fileName = $file->getClientMimeType();
                dd($fileName);
            }else{
                echo "Upload ko thnah cong";
            }
        } else{
            echo "Vui long chon file";
        }

;    }
}
