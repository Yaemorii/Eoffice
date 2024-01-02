<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tujuan extends Model
{
    use HasFactory;

    protected $table = 'tujuans';
    protected $primarykey = 'id';
    protected $fillable = ['tujuan', 'misi_id', 'indikator_id','sasaran_id'];

    public function misi()
    {
        return $this->belongsTo(Misi::class);
    }

    public function indikator(){
        return $this->hasMany(Indikator::class);  
    }

    // Tujuan milik satu IndikatorSasaran
    public function indikatorSasaran()
    {
        return $this->belongsTo(IndikatorSasaran::class);
    }
    public function sasaran()
    {
        return $this->belongsTo(Sasaran::class);
    }
}
