<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Company::class, 10)->create();
    }
}
