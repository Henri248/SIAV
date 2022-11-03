<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
            'matricula' => '123456',
            'name' => 'teste1',
            'email' => 'teste1@gmail.com',
            'password' => '12345678',
            'tipo_usuario' => 'servidor'
        ]);

        DB::table('users')->insert([
            'matricula' => '654321',
            'name' => 'teste2',
            'email' => 'teste2@gmail.com',
            'password' => '12345678',
            'tipo_usuario' => 'copad'
        ]);
    }
}
