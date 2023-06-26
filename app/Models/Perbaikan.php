<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perbaikan extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['soal_26', 'jenis_26', 'jawaban_26'];
}
