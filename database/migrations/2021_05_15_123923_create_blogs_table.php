<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('blog_category_id');
            $table->string('slug')->unique();
            $table->longtext('description');
            $table->string('image');
            $table->string('views')->default(0);
            $table->string('likes')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('blog_category_id')->references('id')->on('blog_categories')->onDelete('cascade');
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
        Schema::table('blogs', function (Blueprint $table) {
            //
        });
    }
}
