<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\CreatePegawaiRequest;
use App\Pegawai;

class PegawaiController extends Controller
{
    //
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$pegawai = Pegawai::latest('created_at')->get();
        return view('pegawai.index', compact('pegawai'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('pegawai.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreatePegawaiRequest $request)
	{
		//
		Pegawai::create($request->all());
	    return redirect('pegawai')->with('message', 'Data berhasil ditambahkan!'); 
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$pegawai = Pegawai::find($id);
        return view('pegawai.show', compact('pegawai'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$pegawai = Pegawai::find($id);
        return view('pegawai.edit', compact('pegawai'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$pegawaiUpdate = Request::all();
	    $pegawai = Pegawai::find($id);
	    $pegawai->update($pegawaiUpdate);
	    return redirect('pegawai')->with('message', 'Data berhasil dirubah!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		Pegawai::find($id)->delete();
        return redirect('pegawai')->with('message', 'Data berhasil dihapus!');
	}
}
