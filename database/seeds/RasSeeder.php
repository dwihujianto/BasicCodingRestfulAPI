<?php

use Illuminate\Database\Seeder;

class RasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        \DB::table('ras')->truncate();
        Schema::enableForeignKeyConstraints();

        \DB::table('ras')->insert([
        	['nama_ras' => 'Ayam pelung'],
        	['nama_ras' => 'Ayam kedu'],
        	['nama_ras' => 'Ayam nunukan'],
        ]);
    }
}
