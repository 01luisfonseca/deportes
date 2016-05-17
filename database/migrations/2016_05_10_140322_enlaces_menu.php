<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EnlacesMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('derechos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('descripcion');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('enlaces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('link');
            $table->integer('peso');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('subenlaces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('link');
            $table->integer('enlaces_id');
            $table->integer('peso');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('subsubenlaces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('link');
            $table->integer('subenlaces_id');
            $table->integer('peso');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('derechos_has_subenlaces', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('derechos_id');
            $table->integer('subenlaces_id');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('derechos_has_subsubenlaces', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('derechos_id');
            $table->integer('subsubenlaces_id');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('users',function($table){
            $table->softDeletes();
            $table->integer('derechos_id');
            $table->integer('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('derechos');
        Schema::drop('enlaces');
        Schema::drop('subenlaces');
        Schema::drop('subsubenlaces');
        Schema::drop('derechos_has_subenlaces');
        Schema::drop('derechos_has_subsubenlaces');
    }
}
