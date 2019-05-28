<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seeder de usuarios y archivos
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 3)->create();
        factory(App\Files::class, 15)->create();
        
    }
}
