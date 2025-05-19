<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembayaran extends Model
{
    use HasFactory;

    // Nama tabel jika tidak sesuai plural model (optional jika Laravel sudah otomatis)
    protected $table = 'pembayarans';

    // Kolom yang boleh diisi secara mass assignment
    protected $fillable = [
        'kode_pembayaran',
        'jumlah',
        'metode_pembayaran',
        'keterangan',
        'tanggal_pembayaran',
        'status',
    ];

    // Tipe data casting
    protected $casts = [
        'tanggal_pembayaran' => 'datetime',
        'jumlah' => 'decimal:2',
    ];

    /**
     * Relasi ke User (pembayar)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
