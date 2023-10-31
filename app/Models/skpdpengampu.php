<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skpdpengampu extends Model
{
    protected $table = 'skpdpengampus';
    protected $primarykey = 'id';
    protected $fillable = [
        'skpd_pengampu',
        'delstatus',
    ];
    public function formulir()
    {
        return $this->hasMany(formulir::class);
    }
}
