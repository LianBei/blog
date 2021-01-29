<?php
namespace App\Http\Controllers\Admin\auth;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller{
    public function index(){
        $account = Input::get('account');
        $password = Input::get('password');
        $table = new admin();


        return view('Admin/auth/login');
    }

}