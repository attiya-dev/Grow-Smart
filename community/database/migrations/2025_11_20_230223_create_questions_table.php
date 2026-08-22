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
        Schema::create('questions', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('user_id');

            // Category
            $table->enum('category', [
                'crop',
                'fruit',
                'vegetable'
            ]);

            // Question
            $table->text('question_text')->nullable();

            // Image
            $table->string('question_image')->nullable();

            // Voice Message
            $table->json('question_voice')->nullable();

            // Status
            $table->enum('status', [
                'pending',
                'approved',
                'rejected'
            ])->default('pending');

            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
