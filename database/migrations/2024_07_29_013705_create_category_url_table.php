<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('category_url', function (Blueprint $table) {
            $table->primary(['category_id', 'url_id']);
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('url_id')->unsigned();
            $table->timestamps();

            $table->foreign('category_id')->references('id')
                ->on('categories')->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('url_id')->references('id')
                ->on('urls')->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_url');
    }
};
