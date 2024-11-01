<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        UserSeeder::class;
        LivroSeeder::class;
        
        User::factory()->count(100)->create();

        // Criação de um usuário de teste
        User::factory()->create([
            'codpes' => '123456',
            'email' => 'qualquer@usp.br',
            'name' => 'Fulano da Silva',
            'is_admin' => true,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        ]);
    }
}
