<?php

namespace Database\Seeders;

use App\Models\Pembayaran;
use Illuminate\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Pembayaran::count() === 0) {
            Pembayaran::create([
                'kode_pembayaran'    => 'PMT-001A',
                'jumlah'             => 500000.00,
                'metode_pembayaran'  => 'transfer',
                'keterangan'         => 'Pembayaran pertama dari user 1',
                'tanggal_pembayaran' => now(),
                'status'             => 'sukses',
            ]);
        }
    }
}
