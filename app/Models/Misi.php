<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Misi extends Model
{
    use HasFactory;

    protected $table = 'misis';
    protected $primarykey = "id";
    protected $fillable = [
        'misi',
        'tujuan_id',
        'sasaran_id',
    ];

    public function tujuan()
    {
        return $this->hasMany(Tujuan::class);
    }
    // Misi milik satu Visi
    public function visi()
    {
        return $this->belongsTo(Visi::class);
    }

    // Misi dapat memiliki banyak Indikator
    public function indikators()
    {
        return $this->hasMany(Indikator::class);
    }
    public function sasaran()
    {
        return $this->belongsTo(Sasaran::class);
    }
}
