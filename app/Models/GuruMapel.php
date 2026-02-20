<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruMapel extends Model
{
    //
    use HasFactory, HasUuids;

    protected $table = 'guru_mapel';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'guru_id',
        'mapel_id',
        'kelas_id',
    ];

    public function guru() {
        return $this->belongsTo(User::class, 'guru_id', 'id');
    }

    public function mapel() {
        return $this->belongsTo(Mapel::class, 'mapel_id', 'id');
    }

    public function kelas() {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }
}
