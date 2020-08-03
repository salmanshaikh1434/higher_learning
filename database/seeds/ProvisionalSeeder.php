<?php

use Illuminate\Database\Seeder;

class ProvisionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ProvisionalRegistration::class,10)->create();
    }
}
