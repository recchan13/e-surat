<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor',
        'judul',
        'unit',
        'tujuan',
        'posisi',
        'no_disposisi',
    ];
}
