<?php


namespace App\Http\Controllers\vue;


use App\Http\Controllers\Controller;
use App\Models\Vue;
use Illuminate\Support\Facades\Input;

class BlogController extends Controller{
    public function getUser3(){
        $vue = new Vue();
        $like = Input::get('like');
//        定时器
        sleep(1);
        if ($like){
            $data = $vue->getLikeData('2',['account'=>$like]);
        }else{
            $data = $vue->getAllData('2',[],['id'=>'asc']);
        }
        echo json_encode($data);
    }

    public function deleteUser3(){
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

    public function editUser3(){
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

    public function addUser3(){
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