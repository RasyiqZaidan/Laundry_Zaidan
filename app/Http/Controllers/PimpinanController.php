<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PimpinanController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    
    public function index(){
        $data = User::whereHas('roles', function ($query) {
            $query->where('name', 'pimpinan');
        })->get();

        return view('pimpinan.index', compact('data'));
    }

    public function store(Request $request){
        $pimpinan = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        $pimpinan->assignRole('pimpinan');
    
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
