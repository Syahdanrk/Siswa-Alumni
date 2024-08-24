<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table = "datasiswaalumni";
    protected $fillable = ["nisn", "nama", "jenis_kelamin", "alamat", "foto", "tahun_masuk", "tahun_keluar", "lanjut", "dimana", "email", "no_telp", "catatan"];
}
