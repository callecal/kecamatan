<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MasterPenggunaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();

        $truncate = DB::table('master_pengguna')->truncate();

        $insert = DB::table('master_pengguna')
            ->insert([
                [
                    'nama' => 'Dafin',
                    'email' => 'dafin@gmail.com',
                    'password' => bcrypt('123'),
                    'nomor_telepon' => '0895332055486',
                    'alamat' => 'Kota Bandung',
                    'jenis_pengguna' => 'Pelayanan',
                    'created_at' => $date
                ],
                [
                    'nama' => 'Rezar Septian Juhana',
                    'email' => 'rezarseptiann@gmail.com',
                    'password' => bcrypt('123'),
                    'nomor_telepon' => '08515665356',
                    'alamat' => 'Kota Bandung',
                    'jenis_pengguna' => 'Admin',
                    'created_at' => $date
                ]
            ]);
    }
}
