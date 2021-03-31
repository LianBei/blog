<?php


namespace App\Http\Controllers\vue;


use App\Http\Controllers\Controller;
use App\Models\Vue;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller{
    public function login(){
        $vue = new Vue();
        $data['account'] = Input::post('account');
        $data['password'] =Input::post('password');
        $login = $vue->where(['account'=>$data['account'],'password'=>$data['password']])->frist();
        echo json_encode($login);
    }
    public function time1(){
        $value1 = Input::post('value1');
        echo $value1;
    }
    public function getPassword(){
        $vue = new Vue();
        $id = Input::post('id');
        $data = $vue->getRow(['id'=>$id]);
        if ($data){
            return response()->json([
                'code' => 0,
                'message' => 'ok'
            ]);
        } else {
            return response()->json([
                'code' => 1,
                'message' => 'error'
            ]);
        }
    }
    public function getAll(){
        $vue = new Vue();
        $like = Input::get('like');
        if ($like){
            $data=$vue->getLikeData('3',['account'=>$like]);
        }else{
            $data = $vue->getAllData('2',[],['id'=>'desc']);
        }
        echo json_encode($data);
    }
    public function deleteUser(){
        $vue = new Vue();
        $id = Input::get('id');
        $data = $vue->deleteData(['id'=>$id]);
        if ($data){
            return response()->json([
                'code' => 0,
                'message' => 'ok'
            ]);
        } else {
            return response()->json([
                'code' => 1,
                'message' => 'error'
            ]);
        }
    }
    public function addUser(){
        $vue = new Vue();
        $getDate['account']=Input::post('account');
        $getDate['password']=Input::post('password');
        $addDate = $vue ->insertData($getDate);
        if ($addDate){
            return response()->json([
                'code' => 0,
                'message' => 'ok'
            ]);
        } else {
            return response()->json([
                'code' => 1,
                'message' => 'error'
            ]);
        }
    }
    public function editUser(){
        $vue = new Vue();
        $id=Input::post('id');
        $editDate['account']=Input::post('account');
        $editDate['password']=Input::post('password');
        $result=$vue->updateData(['id'=>$id],$editDate);
        if ($result){
            return response()->json([
                'code' => 0,
                'message' => 'ok'
            ]);
        } else {
            return response()->json([
                'code' => 1,
                'message' => 'error'
            ]);
        }
    }
}