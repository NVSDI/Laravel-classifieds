<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Delete 'category'  table. i created wrong things in this table, drop it first before create new
        Schema::dropIfExists('category');

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 64);
            $table->text('description')->nullable();
            $table->string('img', 32)->nullable();
            $table->tinyInteger('parent_category_id')->nullable();
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
        Schema::dropIfExists('categories');
    }
}
