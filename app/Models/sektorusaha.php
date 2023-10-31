<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sektorusaha extends Model
{
    protected $table = 'sektorusahas';
    protected $primarykey = 'id';
    protected $fillable = [
        'sektor_usaha',
        'delstatus',
    ];
    public function formulir()
    {
        return $this->hasMany(formulir::class);
    }
}
