<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\User;
use Spatie\Permission\Models\Role;


class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Role::create(['name' => 'super-admin']);

      $user = User::create(
        [
            'id'                   => 25,
            'name'                 => 'Super Admin',
            'email'                => 'admin@mufid.or.id',
            'phone_code'           => '62',
            'phone_number'         => '08125144744',
            'code_access'          => 'qweqweqwe',
            'code_access_max_date' => Carbon::now()->addHour(),
            'password'             => bcrypt('qweqweqwe'),
        ],
      );

      $user->assignRole('super-admin');
      $user->assignRole('mia-admin');
    }
}
