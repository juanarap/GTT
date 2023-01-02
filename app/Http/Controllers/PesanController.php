<?php

namespace App\Http\Controllers;
use App\Produk;
use App\pesanan;
use App\pesananDetail;
use Illuminate\Http\Request;
use Auth;
use Alert;
use Carbon\Carbon;


class PesanController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}
    public function index($id)
	{
		$produk = Produk::where('id', $id)->first();

		return view('pesan.index', compact('produk'));
	}
    public function pesan(Request $request, $id)
	{
		$produk = Produk::where('id', $id)->first();
		$tanggal = Carbon::now();

		//validasi stok
		if($request->jumlah_pesan > $produk->stok)
		{
			alert()->error('Pemesanan Melebihi Jumlah Stok', 'Gagal');
			return redirect('pesan/'.$id);
		}

		//cek validasi status pesanan = 0 sudah ada
		$cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
		//simpan ke database pesanan
		if (empty($cek_pesanan)) //kalo kosong dibuat
		{
			$pesanan = new Pesanan;
			$pesanan->user_id = Auth::user()->id;
			$pesanan->tanggal = $tanggal;
			$pesanan->status = 0;
			$pesanan->jumlah_harga = 0;
			$pesanan->kode = mt_rand(100, 999);
			$pesanan->save();
		}


		//simpan ke database pesanan detail
		$pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

		//cek pesanan detail
		$cek_pesanan_detail = PesananDetail::where('barang_id', $produk->id)->where('pesanan_id', $pesanan_baru->id)->first();
		if (empty($cek_pesanan_detail)) //jika itu sudah ada gk usah buat cukup ditambah saja
		{
			$pesanan_detail = new PesananDetail;
			$pesanan_detail->barang_id = $produk->id;
			$pesanan_detail->pesanan_id = $pesanan_baru->id;
			$pesanan_detail->jumlah = $request->jumlah_pesan;
			$pesanan_detail->jumlah_harga = $produk->harga * $request->jumlah_pesan;
			$pesanan_detail->save();
		} else {
			$pesanan_detail = PesananDetail::where('barang_id', $produk->id)->where('pesanan_id', $pesanan_baru->id)->first();

			$pesanan_detail->jumlah = $pesanan_detail->jumlah + $request->jumlah_pesan;

			//harga sekarang
			$harga_pesanan_detail_baru = $produk->harga * $request->jumlah_pesan;
			$pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga + $harga_pesanan_detail_baru;
			$pesanan_detail->update();
		}

		//jumlah total
		$pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
		$pesanan->jumlah_harga = $pesanan->jumlah_harga + $produk->harga * $request->jumlah_pesan;
		$pesanan->update();
		alert()->success('Silahkan Menuju Keranjang dan CheckOut', 'Success');
		return redirect('check-out');
	}
	public function check_out()
	{
		$pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
		$pesanan_details = [];
		if (!empty($pesanan)) {
			$pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();
		}

		return view('pesan.check_out', compact('pesanan', 'pesanan_details'));
	}
	public function delete($id)
	{
		$pesanan_detail = PesananDetail::where('id', $id)->first();

		$pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
		$pesanan->jumlah_harga = $pesanan->jumlah_harga - $pesanan_detail->jumlah_harga;
		$pesanan->update();

		$pesanan_detail->delete();

		alert()->error('Pesanan Sukses Dihapus', 'Hapus');
		return redirect('check-out');
	}
	public function konfirmasi()
	{
		$pesanan = pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
		$pesanan_id=$pesanan->id;
		$pesanan->status = 1;
		$pesanan->update();

		$pesanan_details=PesananDetail::where('pesanan_id',$pesanan_id)->get();
		foreach($pesanan_details as $pesanan_detail){
			$produk=Produk::where('id',$pesanan_detail->barang_id)->first();
			$produk->stok=$produk->stok-$pesanan_detail->jumlah;
			$produk->update();
		}

		alert()->success('Pesanan Berhasil Check Out Silahkan Hubungi Admin Dengan Klik Logo WhatsApp Di Atas Sebagai Tanda Konfirmasi Pembayaran', 'Success');
		return redirect('check-out');
	}
}


