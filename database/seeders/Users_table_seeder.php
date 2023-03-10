<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class Users_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =\App\Models\User::create([
            'first_name' => 'super',
            'last_name' => 'admin',
            'email' => 'super_admin@app.com',
            'password' => bcrypt('123456')
        ]);
        $user->attachRole('super_admin');

    } /* end of run */
 } /* end of seeder */
