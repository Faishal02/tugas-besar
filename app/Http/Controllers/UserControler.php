<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UserModel;
class UserController extends Controller{
    public function __construct(){
        $this->UserModel=new UserModel();
    }
    public function index(){
        $data=[
            'user'=>$this->UserModel->allData(),
        ];
        return view('user',$data);
    }
    public function tambah(){
        return view('user');
    }
    public function insert(){
        Request()->validate([
            'foto'=>'required',
            'nama'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
    }
    public function edit($id){
        if(!$this->UserModel->detailData($id)){
            abort(404);
        }
        $data = [
            'user'=>$this->UserModel->detailData(id),
        ];
        return view('user',$data);
    }
    public function update($id){
        Request()->validate([
            'foto'=>'required',
            'nama'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        $this->UserModel->addData($data);
        return redirect()->route('user')->with('pesan','Data Berhasil Di Update');
    }
}