<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AkunPenggunaRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Datatables;
use Hash;

class AkunPenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	   $data = [
			'user' => User::all()
	   ];
	
        return view('admin.akun-pengguna.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AkunPenggunaRequest $request)
    {
        User::create([
			'first_name' => $request->nama_depan,
			'last_name' => $request->nama_belakang,
			'email' => $request->email,
			'username' => $request->username,
			'password' => Hash::make($request->password),
			'role' => $request->hak_akses
		]);
		
		toast('Akun berhasil disimpan!', 'success');
		return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
	   $data = [
			'user' => User::find($id)->first()
	   ];
	
        return view('admin.akun-pengguna.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AkunPenggunaRequest $request, $id)
    {
        User::find($id)->update([
			'first_name' => $request->nama_depan,
			'last_name' => $request->nama_belakang,
			'email' => $request->email,
			'username' => $request->username,
			'role' => $request->hak_akses
		]);
		
		if($request->password){
			User::find($id)->update([
				'password' => Hash::make($request->password),
			]);
		}
		
		toast('Akun berhasil di edit!', 'success');
		return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
	   toast('Akun berhasil dihapus!', 'success');
	   return redirect()->back();
    }
}
