<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('user_id');

            $table->enum('category', [
                'crop',
                'fruit',
                'vegetable'
            ]);

            $table->text('question_text')->nullable();

            $table->string('question_image')->nullable();

            $table->json('question_voice')->nullable();

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

    
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
