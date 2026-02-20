<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    //
    use HasFactory, HasUuids;

    protected $table = 'jurusan';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'kode_jurusan',
        'nama_jurusan'
    ];
}
