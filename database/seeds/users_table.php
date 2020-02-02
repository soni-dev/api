<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class users_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data=[
         "name"=>Str::random(10),
         "email"=>Str::random(10)."@gmail.com",
         "password"=>Hash::make("password"),
    	];
        DB::table("users")->insert($data );
       // factory(App\User::class ,100)->create();
    }
}
