<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myusers', function (Blueprint $table) {
            $table->increments("id");
            $table->string("email");
            $table->string("password");
            $table->string("firstname");
            $table->string("lastname");
            $table->text("phone");
            $table->longText("image");
            $table->json("interests");
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('myusers');
    }
}
