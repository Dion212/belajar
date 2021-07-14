<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Makul;
class MakulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makul = makul::all();
        return view('makul.index',compact('makul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('makul.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $makul= makul::create($request->all());
        alert()->success('Selemat', 'Data Berhasil Disimpan');
         return redirect()->route('makul.index');
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
        $makul = makul::find($id);
        // dd($makul);
        return view ('makul.edit', compact('makul'));
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
        $makul = makul::findorfail($id);
        $makul->update($request->all());
        alert()->success('Selamat', 'Data Berhasil DiUpdate');

        // dd($makul);
        //$makul->update();

        return redirect()->route('makul.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $makul = makul::findorfail($id);
       $makul ->delete();
    // makul::destroy($id);
    //    dd($makul);
        alert()->success('Selamat', 'Data Berhasil Dihapus');
        return redirect()->route('makul.index');
    }
}
