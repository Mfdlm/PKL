<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = 'pegawais';
    protected $primarykey = 'id';
    protected $fillable = [
        'nip',
        'nama',
        'tgl_lahir',
        'no_telepon',
        'jenis_kelamin',
        'alamat',
        'delstatus',
    ];
    public function User()
    {
        return $this->hasMany(User::class);
    }
}
