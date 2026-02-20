<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPiket extends Model
{
    use HasFactory, HasUuids;
    //
    protected $table = 'users';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'user_id',
        'hari_piket'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
