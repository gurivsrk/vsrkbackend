<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWpMigratationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wp_migratation', function (Blueprint $table) {
            $table->string('postId',10)->primary()->nullable();
            $table->mediumText('tagName')->nullable();
            $table->string('catName',200)->nullable();
            $table->mediumText('title')->nullable();
            $table->string('mediaId',20)->nullable();
            $table->string('mediaName',300)->nullable();
            $table->mediumText('mediaLocation')->nullable();
            $table->longText('description')->nullable();
            $table->mediumText('categories')->nullable();
            $table->string('author',200)->nullable();
            $table->mediumText('tags')->nullable();
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
        Schema::dropIfExists('wp_migratation');
    }
}
