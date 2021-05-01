<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Facades\DB;
class MerekModel extends Model
{
    public function allData(){
        return DB::table('brands')->get();
    }
    public function tambahData($data){
        DB::table('brands')->isert($data);
    }
    public function editData($id,$data){
        DB::table('brands')->where('id',$id)->update($data);
    }
}
