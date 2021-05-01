<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Facades\DB;
class KategoriModel extends Model
{
    public function allData(){
        return DB::table('categories')->get();
    }
    public function tambahData($data){
        DB::table('categories')->isert($data);
    }
    public function editData($id,$data){
        DB::table('categories')->where('id',$id)->update($data);
    }
}
