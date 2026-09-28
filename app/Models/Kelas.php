<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'kelas';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama_kelas',
    ];

    /**
     * Method untuk mengambil seluruh data kelas dari database
     */
    public function getKelas()
    {
        return $this->all();
    }
}