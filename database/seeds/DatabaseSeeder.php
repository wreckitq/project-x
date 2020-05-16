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
        factory(\App\User::class)->times(10)->create();
        factory(\Modules\Mission\Models\Mission::class)
            ->state(\App\Enums\MissionStatus::PUBLISHED)
            ->times(10)
            ->create();
        factory(\Modules\Mission\Models\Mission::class)
            ->state(\App\Enums\MissionStatus::ONPROGRESS)
            ->times(10)
            ->create();
        factory(\Modules\Mission\Models\Mission::class)
            ->state(\App\Enums\MissionStatus::COMPLETED)
            ->times(10)
            ->create();
    }
}
