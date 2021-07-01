<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Auth;
use Whoops\Run;


class ControllerHome extends Controller

{
	public function login()
	{


		return view('login');
	}

	public function admin()
	{


		return view('admin.admin');
	}
	public function user()
	{
		$barang = DB::table('barang')->get();
		return view('user.home', ['barang' => $barang]);
	}
	public function terima($id)
	{


		$kirim = DB::table('pembayaran')->where('kode_pembayaran', $id)->where('status_bayar', 'Sudah Dikirim')
			->update([
				"status_bayar" => "Sudah Diterima",

			]);
		return redirect('/pembayaran');
	}
	public function proses_tambah_keranjang($tambah)
	{
		// dd($tambah);
		$harga = DB::table('barang')
			->select('harga')
			->where('kode_barang', $tambah)
			->first();
		// dd($harga->all());
		$user = Auth::user()->id;
		DB::table('keranjang')->insert([
			'kode_barang' => $tambah,
			'hargatotal' => $harga->harga,
			'jumlah' => "1",
			'id_user' => $user,
			'status' => "Belum Bayar",

		]);

		return redirect('/user');
	}

	public function proses_tambah_barang(Request $tambah)
	{
		// dd($tambah->all());

		DB::table('barang')->insert([
			'kode_barang' => $tambah->kode_barang,
			'nama_barang' => $tambah->nama_barang,
			'deskripsi' => $tambah->deskripsi,
			'harga' => $tambah->harga,
			'file' => $tambah->file,
			'stok' => $tambah->Stok,
		]);

		return view('admin.tambah_barang');
	}
	public function detail($id)
	{
		$user = Auth::user()->id;
		$pembayaran = DB::table('pembayaran')->where('kode_pembayaran', $id)
			->join('barang', 'pembayaran.kode_barang', '=', 'barang.kode_barang')

			
			->get();
		
		// dd($keranjang);
		return view('user.detail', ['keranjang' => $pembayaran]);
	}
	public function detail_bukti($id)
	{
		$user = Auth::user()->id;
		$pembayaran = DB::table('pembayaran')->where('kode_pembayaran', $id)
			->join('barang', 'pembayaran.kode_barang', '=', 'barang.kode_barang')

			// ->where('buku_judul','LIKE',"%Slider%")
			->get();
		
		// dd($keranjang);
		return view('admin.detail', ['pembayaran' => $pembayaran]);
	}
	public function bayar(Request $request)
	{
		
		
		$file = $request->file('bukti');
 
		$nama_file = $file->getClientOriginalName();
 
		$tujuan_upload = 'img/bukti';
		$file->move($tujuan_upload,$nama_file);

		$user = Auth::user()->id;
		$pembelian = DB::table('keranjang')->where('id_user', $user)->get();
		$id = 'BYR' . sprintf("%04s", rand(1, 1000));
		foreach ($pembelian as $Pembelian) {
			DB::table('pembayaran')->where('id_user', $user)
				->insert([
					"kode_pembayaran" => $id,
					"kode_barang" => $Pembelian->kode_barang,
					"id_user" => $Pembelian->id_user,
					"harga" => $Pembelian->hargatotal,
					"jumlah" => $Pembelian->jumlah,
					"status_bayar" => 'sudah bayar',
					"bukti"=> $nama_file,
				]);
			$bayar = DB::table('barang')->select("stok")->where('kode_barang', $Pembelian->kode_barang)->first();
			$beli = (int)$bayar->stok;
			$beli2 = $beli - $Pembelian->jumlah;
			DB::table('barang')->where('kode_barang', $Pembelian->kode_barang)->update([
				"stok" => $beli2,

			]);
		}
		DB::table('keranjang')->where('id_user', $user)->delete();
		return redirect('/keranjang');
	}

	public function pembayaran()
	{
		$user = Auth::user()->id;
		$pembayaran = DB::table('pembayaran')->select(DB::raw("status_bayar,sum(harga) as harga,kode_pembayaran"))->groupBy("kode_pembayaran", "status_bayar")->where('id_user', $user)->get();
		
		return view('user.pembayaran', ['pembayaran' => $pembayaran]);
	}

	public function kirim($id)
	{

		DB::table('pembayaran')->where('kode_pembayaran', $id)->where('status_bayar', 'sudah bayar')
			->update([
				"status_bayar" => "Sudah Dikirim",
				"tanggal" => Carbon::now()->format('y-m-d'),

			]);
		return redirect('/admin/pembayaran');
	}
	public function harian()
	{

		$harian = DB::table('pembayaran')->select(DB::raw("sum(harga) as harga,sum(jumlah) as jumlah,tanggal"))
		->where('status_bayar', 'Sudah Dikirim')
		->orWhere('status_bayar', 'Sudah Diterima')
		->groupBy("tanggal")
		->get();
		$total = DB::table('pembayaran')->sum('harga');
		// dd($total);
		return view('admin.harian', ['harian' => $harian,'total' => $total]);
	}
	public function terkirim()
	{

		$terkirim = DB::table('pembayaran')->select(DB::raw("kode_pembayaran,status_bayar,sum(harga) as harga,sum(jumlah) as jumlah,tanggal"))
		->where('status_bayar', 'Sudah Dikirim')
		->orWhere('status_bayar', 'Sudah Diterima')
		->groupBy("kode_pembayaran","status_bayar","tanggal")
		->get();
		$total = DB::table('pembayaran')->sum('harga');
		// dd($total);
		return view('admin.terkirim', ['terkirim' => $terkirim,'total' => $total]);
	}

	public function pembayaran_admin()
	{

		$pembayaran = DB::table('pembayaran')->select(DB::raw("status_bayar,sum(harga) as harga,kode_pembayaran"))->where('status_bayar', 'sudah bayar')->groupBy("kode_pembayaran", "status_bayar")->get();

		return view('admin.pembayaran', ['pembayaran' => $pembayaran]);
	}

	public function tambah_barang()
	{

		return view('admin.tambah_barang');
	}

	public function barang()
	{
		$barang = DB::table('barang')
			->get();


		return view('admin.barang', ['barang' => $barang]);
	}

	public function upload(Request $request)
	{
		$this->validate($request, [
			'file' => 'required',
			'keterangan' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

		// nama file
		echo 'File Name: ' . $file->getClientOriginalName();
		echo '<br>';

		// ekstensi file
		echo 'File Extension: ' . $file->getClientOriginalExtension();
		echo '<br>';

		// real path
		echo 'File Real Path: ' . $file->getRealPath();
		echo '<br>';

		// ukuran file
		echo 'File Size: ' . $file->getSize();
		echo '<br>';

		// tipe mime
		echo 'File Mime Type: ' . $file->getMimeType();

		// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';

		// upload file
		$file->move($tujuan_upload, $file->getClientOriginalName());
	}
}
