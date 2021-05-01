<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Facades\DB;
class ProductModel extends Model
{
    public function allData(){
        return DB::table('products')->get();
    }
    public function tambahData($data){
        DB::table('products')->isert($data);
    }
    public function editData($id,$data){
        DB::table('products')->where('id',$id)->update($data);
    }
}