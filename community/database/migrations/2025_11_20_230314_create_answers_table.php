<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('answers', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('question_id');

            $table->unsignedBigInteger('expert_id');

            $table->text('answer_text')->nullable();

            $table->string('answer_image')->nullable();

            // Multiple voice recordings stored as JSON
            $table->json('answer_voice')->nullable();

            $table->timestamps();


            // Question relationship
            $table->foreign('question_id')
                ->references('id')
                ->on('questions')
                ->onDelete('cascade');


            // Expert relationship
            $table->foreign('expert_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
