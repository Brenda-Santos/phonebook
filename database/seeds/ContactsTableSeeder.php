<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //op 1
        DB::table('contacts')->insert([
            'salutation' => 'Sr.',
            'name' => 'Brenda Santos',
            'number' => '(99) 99999-9999',
            'birth' => '2020/01/01',
            'email' => 'brenda@brenda.com',
            'note' => "Usuário criado usando Seeder com método DB",
            'created_at' => date('Y-m-d H:i:s')
        ]);

        //op 2

        factory(App\Contact::class,3)->create();
    }
}
