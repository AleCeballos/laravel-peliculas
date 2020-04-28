<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigracionRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //AGREGO CAMPO ROL

        Schema::table('users', function (Blueprint $table) {
            $table->integer('role')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //QUITO CAMPO ROL
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
}
