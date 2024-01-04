<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sasaran extends Model
{
    use HasFactory;
    protected $table = 'sasarans';
    protected $primarykey = 'id';
    protected $fillable = [
        'kode',
        'nama_sasaran',
        'misi',
        'tujuan',
        'indikator_tujuan',
    ];

    // Sasaran memiliki banyak IndikatorSasaran melalui Tujuan
    public function indikatorSasarans()    {
        return $this->hasMany(IndikatorSasaran::class);
    }

    public function Misi(){
        return $this->hasOne(Misi::class, 'id', 'misi');
    }

    public function Tujuan(){
        return $this->hasOne(Tujuan::class, 'id', 'tujuan');
    }

    public function Indikator(){
        return $this->hasOne(Indikator::class, 'id', 'indikator_tujuan');
    }
}
