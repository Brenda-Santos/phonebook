<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //op 1
        DB::table('users')->insert([
            'name' => 'Adm',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        //op 2

        factory(App\User::class,5)->create();
    }
}
