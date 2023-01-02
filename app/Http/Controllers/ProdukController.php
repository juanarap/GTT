<?php

namespace App\Http\Controllers;
use App\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Alert;
use Carbon\Carbon;
class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
       
        $batas = 5;
        $jumlah_produk = Produk::count();
        $produk = Produk::orderBy('id', 'asc')->paginate($batas);
        $no = $batas * ($produk->currentPage()-1);
        return view('produk.index', compact('produk', 'no', 'jumlah_produk'));
    }
    public function create(){
        return view('produk.create');
    }
    public function store(Request $request){
        $produk = new Produk;
        $produk->nama_barang = $request->nama;
        $produk->harga = $request->harga;
        $produk->stok=$request->stok;
        $produk->keterangan = $request->keterangan;
        // $produk->stock=$request->stock;
        if($request->hasFile('gambar')){
            $file       = $request->file('gambar');
            $extension   = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $produk->gambar = $filename;
        }else{
            return $request;
            $produk->gambar='';
        }
        $produk->save();
        alert()->success('Produk Berhasil Di Tambahkan ', 'Success');

        return redirect('/produk');
    }
    public function destroy($id){
        $produk = Produk::find($id);
        $produk->delete();
        alert()->success('Produk Berhasil Di Hapus ', 'Success');
		return redirect('produk');
    }
    public function edit($id){
        $produk = Produk::find($id);
        return view('produk.edit', compact('produk'));
    }
    public function update(Request $request, $id){
        $produk = Produk::find($id);
        $produk->id = $request->id;
        $produk->nama_barang = $request->nama;
        $produk->harga = $request->harga;
        $produk->stok=$request->stok;
        $produk->keterangan = $request->keterangan; 
        // $produk->stock=$request->stock;
    	$produk->update();
        alert()->success('Produk Berhasil Di Update ', 'Success');
        return redirect('/produk')->with('pesan', 'Data berhasil diupdate');
   
}
}
