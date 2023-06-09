<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
   public function run()
    {

      User::create([
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('admin'),
        'level' => 'admin',
    ]);

    User::create([
      'name' => 'pegawai',
      'email' => 'pegawai@gmail.com',
      'password' => bcrypt('pegawai'),
      'level' => 'pegawai',
  ]);


    }
}
