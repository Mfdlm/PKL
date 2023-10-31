<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formulir extends Model
{
    protected $table = 'formulirs';
    protected $primarykey = 'id';
    protected $fillable = [
        'nik',
        'name',
        'nama_usaha',
        'no_hp',
        'jenis_kelamin',
        'alamat_usaha',
        'kecamatan_id',
        'kelurahan_id',
        'jenispelatihan_id',
        'nama_Kel',
        'thn_pelatihan',
        'skpdpengampu_id',
        'sektorusaha_id',
        'plth_yg_prnh_ikut',
    ];
    public function skpdpengampu()
    {
        return $this->belongsTo(skpdpengampu::class, "skpdpengampu_id");
    }
    public function sektorusaha()
    {
        return $this->belongsTo(sektorusaha::class, "sektorusaha_id");
    }
    public function jenispelatihan()
    {
        return $this->belongsTo(pelatihan::class, "jenispelatihan_id");
    }
    public function kecamatan()
    {
        return $this->belongsTo(kecamatan::class, "kecamatan_id");
    }
    public function kelurahan()
    {
        return $this->belongsTo(kelurahan::class, "kelurahan_id");
    }
}
