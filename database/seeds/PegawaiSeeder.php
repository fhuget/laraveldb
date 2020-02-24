<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();

    	for($i=1; $i<20; $i++) {

		       DB::table('pegawai')->insert([
		       	'nama' => $faker->name(),
				'jabatan' => $faker->randomElement(['Ketua','Wakil Ketua','Sekretaris','Bendahara']),
				'umur' => $faker->randomElement(['20','25','30','35','40','45','50']),
				'alamat' => $faker->address(),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
		       ]);

   		}
    }
}
