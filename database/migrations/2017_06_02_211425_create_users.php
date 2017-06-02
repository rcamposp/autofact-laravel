<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert(
            array(
                'email' => 'testa1@autofact.cl',
                'password' => bcrypt('abc123'),
                'name' => 'testa1',       
                'role' => 'admin'        
            )
        );

        DB::table('users')->insert(
            array(
                'email' => 'testa2@autofact.cl',
                'password' => bcrypt('kiu921'),
                'name' => 'testa2',       
                'role' => 'user'
            )
        );

        DB::table('users')->insert(
            array(
                'email' => 'testa3@autofact.cl',
                'password' => bcrypt('mke12'),
                'name' => 'testa3',       
                'role' => 'visita'       
            )
        );
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
