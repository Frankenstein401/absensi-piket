<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    //
     use HasFactory, HasUuids;

    protected $table = 'kelas';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'kode_kelas',
        'nama_kelas',
        'tingkat',
        'jurusan_id'
    ];

    public function jurusan () {
        return $this->belongsTo(Jurusan::class, 'jurusan_id', 'id');
    }
}
