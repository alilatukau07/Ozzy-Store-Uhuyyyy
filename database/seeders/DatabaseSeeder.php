<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Modules\Shop\Database\Seeders\ShopDatabaseSeeder;

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
        if ($this->command->confirm('Apakah anda yakin ingin menghapus semua data?')) {
            $this->command->call('migrate:refresh');
            $this->command->info('Semua data sudah terhapus cuy!');
        }

        User::factory()->create();
        $this->command->info('sample user sudah dibuat');

        if ($this->command->confirm('Apakah ingin membuat sampel product?')) {
            $this->call(ShopDatabaseSeeder::class);
        }
    }
}
