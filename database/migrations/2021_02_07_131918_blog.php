<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Blog extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->integer('categoryId')->unsigned();
            $table->string('title', 100);
            $table->string('slug', 100)->unique();
            $table->string('image', 250)->nullable();
            $table->text('blog');
            $table->smallInteger('status')->default(0)->comment('0:Pending, 1:Approved, 2:Rejected');
            $table->timestamp('createdAt')->nullable();
            $table->timestamp('updatedAt')->nullable();
            $table->softDeletes('deletedAt');

            $table->index('categoryId');
            $table->foreign('categoryId')->references('id')->on('category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('blog');
    }
}
