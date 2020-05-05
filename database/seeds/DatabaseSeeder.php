<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('laravolt:admin', ['name' => 'Administrator', 'email' => 'admin@laravolt.dev', 'password' => 'asdf1234'], $this->command->getOutput());
    }
}
