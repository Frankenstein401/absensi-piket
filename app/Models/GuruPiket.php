<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruPiket extends Model
{
    //
    use HasUuids, HasFactory;

    protected $table = 'guru_piket';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'hari_piket',
        'guru_id',
        'urutan'
    ];

    public function guru() {
        return $this->belongsTo(User::class, 'guru_id', 'id');
    }
}
