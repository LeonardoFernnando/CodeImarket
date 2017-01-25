<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\CodeIMarket\Models\User::class, 10)->create()->each(function ($u){
            $u->market()->save(factory(\CodeIMarket\Models\Market::class)->make());
        });
    }
}
