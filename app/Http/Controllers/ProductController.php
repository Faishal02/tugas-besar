<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ProductModel;
class ProductController extends Controller{
    public function __construct(){
        $this->productModel=new ProductModel();
    }
    public function index(){
        $data=[
            'products'=>$this->ProductModel->allData(),
        ];
        return view('product',$data);
    }
    public function tambah(){
        return view('product');
    }
    public function insert(){
        Request()->validate([
            'foto'=>'required',
            'nama'=>'required',
            'kategori'=>'required',
            'merek'=>'required',
            'harga'=>'required',
        ]);
    }
    public function edit($id){
        if(!$this->ProductModel->detailData($id)){
            abort(404);
        }
        $data = [
            'products'=>$this->ProductModel->detailData(id),
        ];
        return view('product',$data);
    }
    public function update($id){
        Request()->validate([
            'foto'=>'required',
            'nama'=>'required',
            'kategori'=>'required',
            'merek'=>'required',
            'harga'=>'required',
        ]);
        $this->ProductModel->addData($data);
        return redirect()->route('product')->with('pesan','Data Berhasil Di Update');
    }
}