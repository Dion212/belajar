<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilai';
    protected $primaryKey = 'id';
    protected $fillable = ['makul_id',
                                    'mahasiswa_id',
                                    'nilai'];
    public $timestamps = false;

    public function makul(){
        return $this->belongsTo('App\makul');
    }
    public function mahasiswa(){
        return $this->belongsTo('App\Mahasiswa');
    }
}
