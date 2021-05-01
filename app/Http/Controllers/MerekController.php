<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\MerekModel;
class MerekController extends Controller{
    public function __construct(){
        $this->MerekModel=new MerekModel();
    }
    public function index(){
        $data=[
            'brands'=>$this->MerekModel->allData(),
        ];
        return view('Merek',$data);
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
        if(!$this->MerekModel->detailData($id)){
            abort(404);
        }
        $data = [
            'brands'=>$this->MerekModel->detailData(id),
        ];
        return view('merek',$data);
    }
    public function update($id){
        Request()->validate([
            'nama'=>'required',
            'keterangan'=>'required',
        ]);
        $this->MerekModel->addData($data);
        return redirect()->route('merek')->with('pesan','Data Berhasil Di Update');
    }
}