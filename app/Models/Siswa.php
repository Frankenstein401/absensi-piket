<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
     use HasFactory, HasUuids;

    protected $table = 'siswa';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'nis',
        'nama_siswa',
        'kelas_id',
        'user_id'
    ];

    public function kelas() {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
