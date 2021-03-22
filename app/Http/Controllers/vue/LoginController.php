<?php


namespace App\Http\Controllers\vue;


use App\Http\Controllers\Controller;
use App\Models\Vue;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller{
    public function login(){
        $vue = new Vue();
        $data['account'] = Input::post('account');
        $data['password'] =Input::post('password');
        $login = $vue->where('')
    }
    public function time1(){
        $value1 = Input::post('value1');
        echo $value1;
    }
}