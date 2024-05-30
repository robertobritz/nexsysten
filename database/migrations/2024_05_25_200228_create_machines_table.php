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
        Schema::create('machines', function (Blueprint $table) {
            $table->id();
            $table->string('description')->required();
            $table->string('producer')->required();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('machine_category_id')->nullable();
            $table->string('catalogue')->nullable();
            $table->timestamps();

            $table->foreign('machine_category_id')
                ->references('id')
                ->on('machine_categories')
                ->onDelete('set null');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machines');
    }
};
