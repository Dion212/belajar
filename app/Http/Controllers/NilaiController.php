<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Mahasiswa;
use App\Makul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = DB::table('nilai')
                    ->join('makul','makul_id','=','makul.id')
                    ->join('mahasiswa','mahasiswa_id','=','mahasiswa.id')
                    ->get();
        // $makul= Nilai::all();
        // $nilai = Nilai::all();
        // $data=[nilai::all(),Mahasiswa::all(),Makul::all()];
        return view('nilai.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $makul=Makul::all();
        $mahasiswa=Mahasiswa::all();
        return view('nilai.tambah',compact('makul','mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nilai= Nilai::create($request->all());
        alert()->success('Selemat', 'Data Berhasil Disimpan');
         return redirect()->route('nilai.index');
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
        //
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
