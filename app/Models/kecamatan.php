<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    protected $table = 'kecamatans';
    protected $primarykey = 'id';
    protected $fillable = [
        'kecamatan',
        'delstatus',
    ];
    public function formulir()
    {
        return $this->hasMany(formulir::class);
    }
}
