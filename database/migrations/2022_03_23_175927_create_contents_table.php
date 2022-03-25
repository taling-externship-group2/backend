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
            // home에 뿌려줄 내용
            $table->id();
            $table->string('image')->nullalbe();;
            $table->foreignId('user_id')->constrained('users');
            $table->string('title');
            $table->integer('price');
            $table->integer('discount')->nullalbe();
            $table->string('cateSub')->nullalbe();
            $table->integer('duration')->nullalbe();

            // search 페이지
            $table->text('contents_sum')->nullalbe();
            $table->text('target')->nullalbe();
            $table->text('contents_detail')->nullalbe();
            $table->text('crclm')->nullalbe();
            $table->unsignedInteger('cateMain')->nullalbe();
            $table->string('category')->nullalbe();
            $table->string('class_type')->nullalbe();
            $table->boolean('onedayclass')->default(false)->nullalbe();
            $table->integer('love_num')->nullalbe();
            $table->unsignedInteger('rate')->nullalbe();
            $table->integer('review_num')->nullalbe();
            $table->string('tutor_name')->nullalbe();
            $table->string('nickname')->nullalbe();
            $table->string('tutor_img')->nullalbe();



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
