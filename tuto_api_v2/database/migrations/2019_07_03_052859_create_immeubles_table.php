<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImmeublesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immeubles', function (Blueprint $table) {
            $table->Increments('id')->unsigned();
            $table->string('address');
            $table->string('name');
            $table->string('code_im')->nullable();
            $table->string('code_soc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*
        Schema::table('immeubles', function(Blueprint $table) {
            $table->dropForeign('id');
        });
        */
        Schema::dropIfExists('immeubles');
    }
}
