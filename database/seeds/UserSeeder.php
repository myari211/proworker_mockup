<?php

use App\User;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

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
            'id' => Uuid::uuid4()->toString(),
            'email' => 'admin@proworker.co.id',
            'password' => bcrypt('admin123')
        ]);

        $admin->assignRole('admin');
        
        $talent = User::create([
            'id' => Uuid::uuid4()->tostring(),
            'email' => 'apputra16@gmail.com',
            'password' => bcrypt('dimas2011')
        ]);

        $talent->assignRole('talent');
    }
        
}
