<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    // Nama tabel di database (sesuai modul menggunakan 'user')
    protected $table = 'user';

    // Kolom yang dapat diisi secara massal (mass assignable)
    protected $fillable = [
        'nama',
        'nim',
        'kelas_id',
    ];

    /**
     * Method untuk mengambil seluruh data pengguna beserta nama kelasnya (Join Table)
     */
    public function getUser()
    {
        return $this->join('kelas', 'kelas.id', '=', 'user.kelas_id')
                    ->select('user.*', 'kelas.nama_kelas as nama_kelas')
                    ->get();
    }
}