<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biaya126 extends Model
{

    // protected $table = 'Biaya126s';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    use HasFactory;


    protected $fillable = ['name_konsumen', 'email_konsumen', 'jumalah_konsumen', 'tanggal_transaksi', 'keterangan'];
}
