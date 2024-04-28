<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisLayanan;
use App\Models\Order;

class JenisLayananController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }

    public function index(){

        $layanan = JenisLayanan::all();

        return view('jenis-layanan.index', compact('layanan'));
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'harga' => 'required',
        ];

        $request -> validate($rules);

        $data = [
            'nama' => $request->nama,
            'harga' => $request->harga,
        ];
        JenisLayanan::create($data);

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nama' => 'required',
            'harga' => 'required',
        ];

        $request -> validate($rules);

        $data = [
            'nama' => $request->nama,
            'harga' => $request->harga,
        ];

        JenisLayanan::find($id)->update($data);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $data = JenisLayanan::find($id);
        
        $data->delete();

        return redirect()->back();
    }
}
