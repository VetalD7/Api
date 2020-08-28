<?php

/**
 * Class UserSeeder
 */
class UserSeeder extends \Illuminate\Database\Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(App\User::class,100)->create();
    }
}
