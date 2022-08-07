<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('publish_date')->nullable();
            $table->string('link')->nullable();
            $table->text('abstract');
            $table->integer('views_count');
            $table->string('type');
            $table->foreignId('classification_id')
                ->constrained()
                ->onUpdate('cascade');
            $table->foreignId('submitter')
                ->constrained()
                ->onUpdate('cascade');
            $table->string('language');
            $table->enum('status', ['New', 'Under Reviewed', 'Resubmit', 'Accepted']);
            $table->string('keywords');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
