<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('users')->insert([
            'name' => 'beverl',
            'email' => 'kamin.dankonsagul@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'password' => '$2y$10$idcAslp3ltecY9myutRwsO0zIq93hsX6sn6.BlqdpbihifSXgQyfa',
            'created_at' => Carbon\Carbon::now()
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
