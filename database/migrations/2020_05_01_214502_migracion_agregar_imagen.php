<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigracionAgregarImagen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //AGREGO CAMPO

        Schema::table('movies', function (Blueprint $table) {
            $table->string('image', 255)->after('title');
           
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       //QUITO CAMPO
       Schema::table('movies', function (Blueprint $table) {
        $table->dropColumn('image');

        });
    }
}
