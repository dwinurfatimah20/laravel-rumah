<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $table = 'kelass';
    protected $primaryKey = 'id_kelass';
    protected $fillable =[
        'nama_kelas', 'kompetensi',
    ];
}
