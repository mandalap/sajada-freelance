<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    protected $fillable = [
        'sapaan',
        'nama',
        'telepon',
        'gender',
        'usia',
        'domisili',
        'pekerjaan',
        'is_available',
    ];

    protected $casts = [
        'usia' => 'integer',
        'is_available' => 'boolean',
    ];

    public function getNamaLengkapAttribute()
    {
        return $this->sapaan . ' ' . $this->nama;
    }
}
