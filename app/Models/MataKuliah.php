<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class MataKuliah extends Model
{
    // 1. Tentukan nama tabel di database
    protected $table = 'mata_kuliah';

    // 2. Konfigurasi Primary Key UUID (String)
    public $incrementing = false;
    protected $keyType = 'string';

    // 3. Kolom yang diizinkan untuk diisi via ::create()
    protected $fillable = ['nama_mk', 'sks'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    public function getAllMK()
    {
        return $this->all();
    }
}