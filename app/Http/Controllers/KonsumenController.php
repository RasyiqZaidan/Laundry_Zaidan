<?php

namespace App\Http\Controllers;
use App\Models\Konsumen;
use Illuminate\Http\Request;

class KonsumenController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    
    public function index()
    {
        $konsumen = Konsumen::all();

        return view('konsumen.index', compact('konsumen'));
    }
    
    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ];
        
        $request -> validate($rules);

        $data = [
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ];

        Konsumen::create($data);

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ];

        $request -> validate($rules);

        $data = [
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ];

        Konsumen::find($id)->update($data);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $data = Konsumen::find($id);
        
        $data->delete();

        return redirect()->back();
    }
}
