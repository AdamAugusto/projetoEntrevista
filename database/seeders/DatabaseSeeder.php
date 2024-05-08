<?php

namespace Database\Seeders;

use App\Models\Situacao;
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
        // User::factory(10)->create();

        Situacao::factory()->create([
            'nome' => 'Novo',
            'id' => 1,
        ]);
        Situacao::factory()->create([
            'nome' => 'Pendente',
            'id' => 2,
        ]);
        Situacao::factory()->create([
            'nome' => 'Resolvido',
            'id' => 3,
        ]);
    }
}
