<?php
namespace App\Http\Controllers\Admin\index;

use Illuminate\Routing\Controller;

class IndexController extends Controller{
    public function index(){
        return view('Admin/index/index');
    }
}