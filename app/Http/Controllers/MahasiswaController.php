<?php

namespace App\Http\Controllers;

use App\Mahasiswa ;
use Illuminate\Http\Request;
use Alert;
//use UxWeb\SweetAlert\SweetAlert;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // private $message=[
    //     'required'=>'Data Harus Diisi.',
    //     'npm.max'=>'data melebihi karakter :8',
    //     'hp.max'=>'data melebihi karakter :16',
    //     'nama.string'=>'Field nama harus berisi alfabet',
    // ];

    //  private $rules=[
    //     'npm'=>['required','max:8'],
    //     'hp'=>['required','numeric','max:16'],
    //      'nama'=>['required','string','max:30']
    //  ];
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        // return view('Mahasiswa.index',['mahasiswa'=>$mahasiswa]);
        return view('Mahasiswa.index',compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('tambah_data.tambah');
        return view('tambah_data.tambah');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        //validasi
        // $this->validate($request,$this->rules,$this->message);


        //  $mahasiswa = new Mahasiswa;
        //   $mahasiswa->npm=$request->name;


       // $mahasiswa->save();

        // coding simpan

        $mahasiswa= mahasiswa::create($request->all());
        // Alert::success('Success Title', 'Success Message');
        alert()->success('Selemat', 'Data Berhasil Disimpan');
         return redirect()->route('mhs');
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
        $mahasiswa = Mahasiswa::find($id);
        // dd($mahasiswa);
        return view ('mahasiswa.edit', compact('mahasiswa'));
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
        $mahasiswa = Mahasiswa::findorfail($id);
        $mahasiswa->update($request->all());
        alert()->success('Selamat', 'Data Berhasil DiUpdate');

        // dd($mahasiswa);
        //$mahasiswa->update();

        return redirect()->route('mhs');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        alert()->success('Selamat', 'Data Berhasil Dihapus');

        return redirect()->route('mhs');

    }


}
