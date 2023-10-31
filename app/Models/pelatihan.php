<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelatihan extends Model
{
    protected $table = 'pelatihans';
    protected $primarykey = 'id';
    protected $fillable = [
        'jenis_pelatihan',
        'delstatus',
    ];
    public function formulir()
    {
        return $this->hasMany(formulir::class);
    }
}
