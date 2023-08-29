<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor',
        'unit',
        'tujuan',
        'posisi',
        'id_surat_disposisi',
        'id_surat_balasan'
    ];
}
