<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\KategoriModel;
class KategoriController extends Controller{
    public function __construct(){
        $this->KategoriModel=new KategoriModel();
    }
    public function index(){
        $data=[
            'categories'=>$this->KategoriModel->allData(),
        ];
        return view('kategori',$data);
    }
    public function tambah(){
        return view('user');
    }
    public function insert(){
        Request()->validate([
            'nama'=>'required',
            'keterangan'=>'required',
        ]);
    }
    public function edit($id){
        if(!$this->KategoriModel->detailData($id)){
            abort(404);
        }
        $data = [
            'categories'=>$this->KategoriModel->detailData(id),
        ];
        return view('kategori',$data);
    }
    public function update($id){
        Request()->validate([
            'nama'=>'required',
            'keterangan'=>'required',
        ]);
        $this->KategoriModel->addData($data);
        return redirect()->route('kategori')->with('pesan','Data Berhasil Di Update');
    }
}