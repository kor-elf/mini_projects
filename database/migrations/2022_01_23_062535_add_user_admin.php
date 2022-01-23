<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;

class AddUserAdmin extends Migration
{
    private string $adminEmail = 'admin@test.local';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::table('users')->insert([
            'name'  => 'Admin',
            'email' => $this->adminEmail,
            'password' => Hash::make('pa$$word'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::table('users')->where('email', $this->adminEmail)->delete();
    }
}
