<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelurahan extends Model
{
    protected $table = 'kelurahans';
    protected $primarykey = 'id';
    protected $fillable = [
        'kelurahan',
        'delstatus',
    ];
    public function formulir()
    {
        return $this->hasMany(formulir::class);
    }
}
