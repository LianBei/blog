<?php


namespace App\Http\Controllers\vue;


use App\Http\Controllers\Controller;
use App\Models\Vue;
use Illuminate\Support\Facades\Input;

class ListController extends Controller{
    public function getUser(){
        $vue = new Vue();
        $result = $vue->getAllData();
        echo json_encode($result);
    }

    public function deleteUser2(){
        $vue = new Vue();
        $id = Input::get('id');
        $result = $vue->deleteData(['id'=>$id]);
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

    public function editUser2(){
        $vue = new Vue();
        $id = Input::post('id');
        $data['account']= Input::post('account');
        $data['password']= Input::post('password');
        $result = $vue->updateData(['id'=>$id],$data);
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

    public function addUser2(){
        $vue = new Vue();
        $data['account']= Input::post('account');
        $data['password']= Input::post('password');
        $result = $vue->insertData($data);
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