<?php

namespace App\Http\Controllers;

use App\Models\pemweb;
use Illuminate\Http\Request;

class admin1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = pemweb::orderBy('nama', 'DESC')->paginate(5);
        return view('admin1.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|',
            'layanan' => 'required',
            'tipe' => 'required',
            'durasi' => 'required',
        ],[
            'nama.required' => 'Kolom nama wajib diisi!',
            'layanan.required' => 'Kolom Layanan wajib diisi!',
            'tipe.required' => 'Kolom nama Tipe diisi!',
            'durasi.required' => 'Kolom Durasi wajib diisi!',
            
        ]);

        $kode = bin2hex(random_bytes(4));
        $data = [
            'kode' =>$kode,
            'nama' => $request->nama,
            'layanan' => $request->layanan,
            'tipe' => $request->tipe,
            'durasi' => $request->durasi,
        ];
        pemweb::create($data);
        return redirect()->to('admin1')->with('success','Berhasil menambahkan data');
        
        
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
        $data = pemweb::where('nama',$id)->first();
        return view('admin1.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
