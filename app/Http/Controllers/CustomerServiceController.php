<?php

namespace App\Http\Controllers;

use App\Models\customer_service;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class CustomerServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $cs = customer_service::all();
        return view('admin.customer-service.index', compact('cs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.customer-service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email|unique:users',
        ]);
        
        $pw = '12345678';
        $role = ['customer-service'];

        $user = User::create([
            'name' =>$request->nama,
            'role'  == $role,
            'email' =>$request->email,
            'password' => Hash::make($pw),
            'remember_token' => Str::random(10),
        ]);
         $user->update([$user->role = 'customer-service']);
        

        $cs = customer_service::create([
            'user_id' => $user->id,
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
        ]);

        if($cs) {
            return redirect()->route('customer-service.index')->with(['success'=>'data berhasil ditambahkan']);
        } else {
            return redirect()->route('customer-service.index')->with(['gagal'=>'data gagal ditambahkan']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(customer_service $customer_service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cs = customer_service::find($id);
        return view('admin.customer-service.edit', compact('cs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::where('email',$request->email)->update([
            'name' => $request->nama,
            'role'  => 'customer-service',
            'email' => $request->email
        ]);

        $cs = customer_service::where('id',$id)->update([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
        ]);

        if($cs){
            return redirect()->route('customer-service.index')->with(['success'=>'data berhasil diupdate']);
        }
        else{
            return redirect()->route('customer-service.index')->with(['error'=>'data error diupdate']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cs = customer_service::find($id);
        $user = User::where('id', $cs->user_id)->first();
        $user->delete();
        $cek = $cs->delete();
        if($cek) {
            return redirect()->route('customer-service.index')->with(['success'=> 'data berhasil dihapus']);
        } else {
            return redirect()->route('customer-service.index')->with(['gagal'=>'data gagal dihapus']);
        }
    }
}
