<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;
    protected $table = 'lowongan';
    protected $guarded = [];
    protected $dates = ['batas_lamaran'];

    public function datadiri()
    {
        return $this->belongsTo(DataDiri::class, 'id_lowongan', 'id');
    }
}
