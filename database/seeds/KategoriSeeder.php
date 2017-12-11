<?php

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        \DB::table('kategori')->truncate();
        Schema::enableForeignKeyConstraints();

        \DB::table('kategori')->insert([
        	['nama_kategori' => 'Ayam pedaging'],
        	['nama_kategori' => 'Ayam petelur'],
        	['nama_kategori' => 'Ayam hias'],
        	['nama_kategori' => 'Ayam sabung'],
        ]);
    }
}
