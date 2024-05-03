<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([[
            'nama_barang' => 'buku',
            'harga_barang' => '45000',
            'deskripsi_barang' => 'novel',
            'satuan_id' => '1'
        ],]);
    }
}
