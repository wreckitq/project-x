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
        factory(\Modules\Mission\Models\Mission::class)
            ->times(100)
            ->create()->each(function (\Modules\Mission\Models\Mission $mission) {

                $faker = \Faker\Factory::create(config('app.locale'));
                $tags = [
                    'php', 'java', 'laravel', 'springboot',
                    'pentaho', 'camunda', 'bpmn',
                    'vuejs', 'angular', 'react',
                ];
                $mission->syncTags($faker->randomElements($tags, 3));
            });
    }
}
