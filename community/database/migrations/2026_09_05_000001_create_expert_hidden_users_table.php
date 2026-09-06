<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('expert_hidden_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('expert_id');
            $table->unsignedBigInteger('user_id');
            $table->enum('category', ['crop', 'fruit', 'vegetable']);
            $table->timestamps();

            $table->foreign('expert_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unique(['expert_id', 'user_id', 'category']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('expert_hidden_users');
    }
};
