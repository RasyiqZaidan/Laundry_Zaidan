<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisPembayaran;

class JenisPembayaranController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    
    public function index()
    {
      $jenis_pembayaran = JenisPembayaran::all();

      return view('jenis-pembayaran.index', compact('jenis_pembayaran'));
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
        ];

        $request -> validate($rules);

        $data = [
            'nama' => $request->nama,
        ];
        JenisPembayaran::create($data);

        return redirect()->back();
    }
    public function update(Request $request, $id)
    {
        $rules = [
            'nama' => 'required',
        ];

        $request -> validate($rules);

        $data = [
            'nama' => $request->nama,
        ];

        JenisPembayaran::find($id)->update($data);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $data = JenisPembayaran::find($id);
        
        $data->delete();

        return redirect()->back();
    }
}
