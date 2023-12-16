<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndikatorSasaran extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table = 'indikator_sasarans';
    protected $primarykey = "id";
    protected $fillable = [
        'indikator',
        'target_kondisi_awal',
        'target_tahun_2021',
        'target_tahun_2022',
        'target_tahun_2023',
        'target_tahun_2024',
        'target_tahun_2025',
        'target_kondisi_akhir',
        'satuan_pengukuran',
        'sasaran_id'
    ];

    public function sasaran()
    {
        return $this->belongsTo(Sasaran::class);
    }
}
