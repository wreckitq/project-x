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
        foreach (range(1, 10) as $i) {
            factory(\App\User::class)->create(['email' => "member$i@example.com"]);
        }
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
