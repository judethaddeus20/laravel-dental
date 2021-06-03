<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin = User::create([
        'name' => 'admin',
        'role' => 'admin',
        'age' => '00',
        'location' => 'unknown',
        'number' => '00',
        'email'=> 'admin@admin.org',
        'password' => bcrypt('adminfloss'),
      ]);

    }

}
