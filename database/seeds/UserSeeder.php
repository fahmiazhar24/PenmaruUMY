<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Biodata;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "email" => "user@user.com",
            "hak_akses" =>"pendaftar",
            "password" => Hash::make('user123')
        ]);

        DB::table('biodatas')->insert([
            'nama' => 'User Coba',
            'nisn' => '-',
            'tempat_lahir' => '-',
            'tanggal_lahir' => '1999-11-18',
            'no_telp' => '-',
            'alamat' => '-',
            'un_average' => '-',
            'no_ijazah' => '-',
            'foto' => '-',
            'berkas' => '-',
            'status' => '-',
            'total_pembayaran' => '-',
            'no_test' => '-',
            'lokasi' => '-',
            'user_id' => 2,
        ]);
    }
}
