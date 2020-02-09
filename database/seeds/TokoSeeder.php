<?php

use Illuminate\Database\Seeder;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('informasi__tokos')->insert([
        	'nama_instansi' => 'Point Of Sale Tane',
        	'notlp' => '082244405971',
        	'kode_pos' => '13450',
        	'deskripsi' => 'POS Bermanfaat',
        	'alamat' => 'Jl. Batu Ampar',
        	'foto' => 'home.png'
        	]);
    }
}
