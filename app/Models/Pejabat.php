<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pejabat extends Model
{
    protected $table = 'bapperida_pejabat';

    protected $fillable = [
        'nama',
        'jabatan',
        'foto',
        'nip',
        'urutan',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
