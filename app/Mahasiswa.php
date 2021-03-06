<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'Mahasiswa';
    protected $fillable = ['npm',
                                      'nama_mahasiswa',
                                     'tgl_lahir' ,
                                     'tempat_lahir',
                                     'jenis_kelamin',
                                     'hp',
                                     'alamat'];
    public $timestamps = false;
    public function nilai(){
        return $this->hasMany('App\nilai');
    }
}
