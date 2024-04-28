<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    
    public function index(){
        $data = User::whereHas('roles', function ($query) {
            $query->where('name', 'petugas');
        })->get();

        return view('petugas.index', compact('data'));
    }

    public function store(Request $request){
        $petugas = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        $petugas->assignRole('petugas');
    
        return redirect()->back();
    }
    
    

    public function update(Request $request, $id){
        $user = User::find($id);
        
        if($request->password){
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);
        }else{
            $user->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
            ]); 
        }



        return redirect()->back();
    }

    public function destroy($id){
        User::find($id)->delete();

        return redirect()->back();
    }
}
