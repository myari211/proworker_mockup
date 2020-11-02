<?php

use Illuminate\Database\Seeder;
use App\Admin;
use Ramsey\Uuid\Uuid;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'id' => Uuid::uuid4()->getHex(),
            'name' => 'admin',
            'email' => 'admin@proworker.co.id',
            'password' => bcrypt('dimas2011'),
        ]);
    }
}
