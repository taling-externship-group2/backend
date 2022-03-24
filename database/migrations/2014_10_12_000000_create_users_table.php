<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('password');
            $table->string('profile_img')->nullalbe();
            $table->string('name');
            $table->string('phone')->nullalbe();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            // $table->boolean('tutor_auth')->default(false)->nullalbe();
            // $table->string('tutor_info')->nullalbe();
            // $table->string('tutor_insta')->nullalbe();
            // $table->string('tutor_blog')->nullalbe();
            // $table->string('tutor_youtube')->nullalbe();
            
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
        Schema::dropIfExists('users');
    }
}
