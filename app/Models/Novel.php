<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    use HasFactory;

    protected $table = 'novels';
	// field apa saja yang bisa di isi
    public $fillable = ['judul_novel', 'penulis', 'penerbit', 'tipe', 'sampul_novel', 'status', 'genre', 'kerjasama', 'sinopsis'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;
}
