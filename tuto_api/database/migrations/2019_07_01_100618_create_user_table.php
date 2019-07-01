<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('pseudo', 255);
            $table->text('bio');
            $table->char('phone', 255);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->char('address', 255);
            $table->char('city', 255);
            $table->char('zipcode', 255);
            $table->char('country', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
