<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class CommonModel extends Model{
    protected $table = '';
    /**
     * 获取所有数据
     *
     * @param int $pageNumber  每页显示的数量
     * @param array $condition 查询条件
     * @param array $order     排序条件
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|\Illuminate\Support\Collection
     */
    public function getAllData(int $pageNumber, array $condition=[] ,array $order=['id'=>'asc']) {
        $obj = DB::table($this->table);
        if ($pageNumber) {
            if ($condition) {
                foreach ($condition as $key => $value) {
                    $obj = $obj->where($key , $value);
                }
            }
            if ($order) {
                foreach ($order as $key => $value) {
                    $obj = $obj->orderBy($key, $value);
                }
            }
            $data = $obj->paginate($pageNumber);
        } else {
            if ($condition) {
                foreach ($condition as $key => $value) {
                    $obj = $obj->where($key , $value);
                }
            }
            if ($order) {
                foreach ($order as $key => $value) {
                    $obj = $obj->orderBy($key, $value);
                }
            }
            $data = $obj->get();
        }
        return $data;
    }

    /**
     * 获取单行数据，支持条件查询
     * @param array $condition
     * @return mixed
     */
    public function getRow(array $condition=[]){
        $table = DB::table($this->table);
        foreach ($condition as $key=>$value){
            $table = $table -> where($key,$value);
        }
        return $table->first();;
    }
    /**
     * 插入数据
     * @param array $arr
     * @return mixed
     */
    public function insertData(array $arr){
        return DB::table($this->table)->insert($arr);
    }
    /**
     * 更新数据，支持条件查询
     * @param array $condition
     * @param array $arr
     * @return mixed
     */
    public function updateData(array $condition,array $arr){
        $table = DB::table($this->table);
        foreach ($condition as $key=>$value){
            $table = $table -> where($key,$value);
        }
        return  $table->update($arr);
    }

    /**
     * 删除数据，没有条件的情况下不能删除
     * @param array $condition
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteData(array $condition){
        $table = DB::table($this->table);
        if ($condition==null){
            return redirect()->back()->with('error','删除失败');
        } else{
        foreach ($condition as $key=>$value){
            $table = $table -> where($key,$value);
        }
        $data = $table->delete();
        return $data;
        }
    }
    //模糊查询，支持分页，支持条件数组，支持排序
    public function getLikeData(int $pageNumber = 0 , array $like_condition=[],array $condition=[], array $order= array('id'=>'asc')){
        $table = DB::table($this->table);
        if ($pageNumber){
            if ($condition){
                foreach ($condition as $key => $value){
                    $table = $table->where($key,$value);
                }
            }
                foreach ($like_condition as $key => $value){
                    $table = $table->where($key,'like','%'.$value.'%');
                }
            if ($order){
                foreach ($order as $key => $value) {
                    $table = $table->orderBy($key, $value);
                }
            }
            $data = $table->paginate($pageNumber);
        }else{
            if ($condition){
                foreach ($condition as $key => $value){
                    $table = $table->where($key,$value);
                }
            }
            foreach ($like_condition as $key => $value){
                $table = $table->where($key,'like','%'.$value.'%');
            }
            if ($order){
                foreach ($order as $key => $value) {
                    $table = $table->orderBy($key, $value);
                }
            }
            $data = $table->get();
        }
        return $data;
    }
}
