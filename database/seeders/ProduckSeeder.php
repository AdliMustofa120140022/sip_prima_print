<?php

namespace Database\Seeders;

use App\Models\Produck;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           //
        $produk_kantor = [
            ['name' => 'Meja', 'description' => 'Tingkatkan nilai produk Anda dengan Kartu Nama custom yang elegan dan premium. Cetak logo dan desain Anda untuk menciptakan kesan eksklusif dan meningkatkan brand awarness', 'category_id' => 1],
            ['name' => 'Kursi', 'description' => 'Tingkatkan nilai produk Anda dengan Kartu Nama custom yang elegan dan premium. Cetak logo dan desain Anda untuk menciptakan kesan eksklusif dan meningkatkan brand awarness', 'category_id' => 1],
            ['name' => 'Lemari', 'description' => 'Tingkatkan nilai produk Anda dengan Kartu Nama custom yang elegan dan premium. Cetak logo dan desain Anda untuk menciptakan kesan eksklusif dan meningkatkan brand awarness', 'category_id' => 1],
        ];

        foreach ($produk_kantor as $produk) {
            Produck::create($produk);
        }

        $produk_acara = [
            ['name' => 'Tenda', 'description' => 'Tingkatkan nilai produk Anda dengan Kartu Nama custom yang elegan dan premium. Cetak logo dan desain Anda untuk menciptakan kesan eksklusif dan meningkatkan brand awarness', 'category_id' => 2],
            ['name' => 'Kursi Lipat', 'description' => 'Tingkatkan nilai produk Anda dengan Kartu Nama custom yang elegan dan premium. Cetak logo dan desain Anda untuk menciptakan kesan eksklusif dan meningkatkan brand awarness', 'category_id' => 2],
            ['name' => 'Meja Lipat', 'description' => 'Tingkatkan nilai produk Anda dengan Kartu Nama custom yang elegan dan premium. Cetak logo dan desain Anda untuk menciptakan kesan eksklusif dan meningkatkan brand awarness', 'category_id' => 2],
        ];
        
        foreach ($produk_acara as $produk) {
            Produck::create($produk);
        }

        $produk_pendidikan = [
            ['name' => 'Papan Tulis', 'description' => 'Tingkatkan nilai produk Anda dengan Kartu Nama custom yang elegan dan premium. Cetak logo dan desain Anda untuk menciptakan kesan eksklusif dan meningkatkan brand awarness', 'category_id' => 3],
            ['name' => 'Meja Belajar Anak', 'description' => 'Tingkatkan nilai produk Anda dengan Kartu Nama custom yang elegan dan premium. Cetak logo dan desain Anda untuk menciptakan kesan eksklusif dan meningkatkan brand awarness', 'category_id' => 3],
            ['name' => 'Kursi Belajar Anak', 'description' => 'Tingkatkan nilai produk Anda dengan Kartu Nama custom yang elegan dan premium. Cetak logo dan desain Anda untuk menciptakan kesan eksklusif dan meningkatkan brand awarness', 'category_id' => 3],
        ];

        foreach ($produk_pendidikan as $produk) {
            Produck::create($produk);
        }

        $produk_retail = [
            ['name' => 'Rak Buku Minimalis', 'description' => 'Tingkatkan nilai produk Anda dengan Kartu Nama custom yang elegan dan premium. Cetak logo dan desain Anda untuk menciptakan kesan eksklusif dan meningkatkan brand awarness', 'category_id' => 4],
            ['name' => 'Rak Buku Kayu Jati', 'description' => 'Tingkatkan nilai produk Anda dengan Kartu Nama custom yang elegan dan premium. Cetak logo dan desain Anda untuk menciptakan kesan eksklusif dan meningkatkan brand awarness', 'category_id' => 4],
            ['name' => 'Rak Buku Besi Minimalis', 'description' => 'Tingkatkan nilai produk Anda dengan Kartu Nama custom yang elegan dan premium. Cetak logo dan desain Anda untuk menciptakan kesan eksklusif dan meningkatkan brand awarness', 'category_id' => 4],
        ];

        foreach ($produk_retail as $produk) {
            Produck::create($produk);
        }

        $produk_personal = [
            ['name' => 'Tempat Tidur Minimalis', 'description' => 'Tingkatkan nilai produk Anda dengan Kartu Nama custom yang elegan dan premium. Cetak logo dan desain Anda untuk menciptakan kesan eksklusif dan meningkatkan brand awarness', 'category_id' => 5],
            ['name' => 'Lemari Pakaian Minimalis', 'description' => 'Tingkatkan nilai produk Anda dengan Kartu Nama custom yang elegan dan premium. Cetak logo dan desain Anda untuk menciptakan kesan eksklusif dan meningkatkan brand awarness', 'category_id' => 5],
            ['name' => 'Meja Rias Minimalis', 'description' => 'Tingkatkan nilai produk Anda dengan Kartu Nama custom yang elegan dan premium. Cetak logo dan desain Anda untuk menciptakan kesan eksklusif dan meningkatkan brand awarness', 'category_id' => 5],
        ];

        foreach ($produk_personal as $produk) {
            Produck::create($produk);
        }


    }
}