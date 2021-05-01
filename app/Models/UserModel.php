<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Facades\DB;
class UserModel extends Model
{
    public function allData(){
        return DB::table('user')->get();
    }
    public function tambahData($data){
        DB::table('user')->isert($data);
    }
    public function editData($id,$data){
        DB::table('user')->where('id',$id)->update($data);
    }
}
