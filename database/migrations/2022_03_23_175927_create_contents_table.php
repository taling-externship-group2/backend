<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('title')->nullalbe();
            // $table->text('contents_sum')->nullalbe();
            // $table->text('target')->nullalbe();
            // $table->text('contents_detail')->nullalbe();
            // $table->text('crclm')->nullalbe();
            // $table->string('cate_main')->nullalbe();
            // $table->string('cate_sub')->nullalbe();
            // $table->string('class_type')->nullalbe();
            // $table->string('t_type')->nullalbe();
            // $table->unsignedInteger('run_time')->nullalbe();
            // $table->unsignedInteger('run_count')->nullalbe();
            // $table->string('region_main')->nullalbe();
            // $table->string('region_sub')->nullalbe();
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
        Schema::dropIfExists('contents');
    }
}
