<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Barang::insert([
            [
                'kode_barang' => 'PRD001',
                'nama_barang' => 'Indomie',
                'kategori_barang' => 'Makanan',
                'harga' => 3000,
                'qty' => 100
            ],
            [
                'kode_barang' => 'PRD002',
                'nama_barang' => 'Pocari Sweat',
                'kategori_barang' => 'Minuman',
                'harga' => 6000,
                'qty' => 50
            ],
            [
                'kode_barang' => 'PRD003',
                'nama_barang' => 'Silverqueen',
                'kategori_barang' => 'Snack',
                'harga' => 12500,
                'qty' => 45
            ],
            [
                'kode_barang' => 'PRD004',
                'nama_barang' => 'Garnier Serum',
                'kategori_barang' => 'Kosmetik',
                'harga' => 75000,
                'qty' => 125
            ],
            [
                'kode_barang' => 'PRD005',
                'nama_barang' => 'Sari Roti Sandwich',
                'kategori_barang' => 'Makanan',
                'harga' => 5000,
                'qty' => 80
            ],
            [
                'kode_barang' => 'PRD006',
                'nama_barang' => 'Milku',
                'kategori_barang' => 'Minuman',
                'harga' => 3500,
                'qty' => 134
            ],
            [
                'kode_barang' => 'PRD007',
                'nama_barang' => 'Potabee BBQ',
                'kategori_barang' => 'Snack',
                'harga' => 9000,
                'qty' => 230
            ],
            [
                'kode_barang' => 'PRD008',
                'nama_barang' => 'Lotion Marina',
                'kategori_barang' => 'Kosmetik',
                'harga' => 37000,
                'qty' => 94
            ],
            [
                'kode_barang' => 'PRD009',
                'nama_barang' => 'Quaker',
                'kategori_barang' => 'Makanan',
                'harga' => 55000,
                'qty' => 38
            ],
            [
                'kode_barang' => 'PRD010',
                'nama_barang' => 'FreshTea Markisa',
                'kategori_barang' => 'Minuman',
                'harga' => 6000,
                'qty' => 165
            ],
            [
                'kode_barang' => 'PRD011',
                'nama_barang' => 'Kacang Garuda',
                'kategori_barang' => 'Snack',
                'harga' => 24000,
                'qty' => 82
            ],
            [
                'kode_barang' => 'PRD012',
                'nama_barang' => 'Lip Moko-Moko',
                'kategori_barang' => 'Kosmetik',
                'harga' => 64500,
                'qty' => 148
            ],
            [
                'kode_barang' => 'PRD013',
                'nama_barang' => 'Bubur Sun',
                'kategori_barang' => 'Makanan',
                'harga' => 28000,
                'qty' => 65
            ],
            [
                'kode_barang' => 'PRD014',
                'nama_barang' => 'CocaCola',
                'kategori_barang' => 'Minuman',
                'harga' => 7500,
                'qty' => 30
            ],
            [
                'kode_barang' => 'PRD015',
                'nama_barang' => 'Chitato',
                'kategori_barang' => 'Snack',
                'harga' => 12500,
                'qty' => 112
            ],
            [
                'kode_barang' => 'PRD016',
                'nama_barang' => 'Parfum Regaza',
                'kategori_barang' => 'Kosmetik',
                'harga' => 46000,
                'qty' => 145
            ],
            [
                'kode_barang' => 'PRD017',
                'nama_barang' => 'Samyang',
                'kategori_barang' => 'Makanan',
                'harga' => 32000,
                'qty' => 80
            ],
            [
                'kode_barang' => 'PRD018',
                'nama_barang' => 'Pepsi',
                'kategori_barang' => 'Minuman',
                'harga' => 10000,
                'qty' => 95
            ],
            [
                'kode_barang' => 'PRD019',
                'nama_barang' => 'Fitbar',
                'kategori_barang' => 'Snack',
                'harga' => 35000,
                'qty' => 170
            ],
            [
                'kode_barang' => 'PRD020',
                'nama_barang' => 'Bedak Maybelline',
                'kategori_barang' => 'Kosmetik',
                'harga' => 150000,
                'qty' => 62
            ],
        ]);
    }
}
