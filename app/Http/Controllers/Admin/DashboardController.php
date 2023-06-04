<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __contruct(){
        //use session check login
    }
    
    public function index(){
        return '<h2> Welcome</h2>';
    }
}
