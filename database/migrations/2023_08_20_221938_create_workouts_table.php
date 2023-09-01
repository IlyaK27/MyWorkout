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
        Schema::create('workouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('tags');
            $table->longText('description');
            $table->timestamps();
            $table->string('exercises')->nullable()->default(null);
            $table->string('sets')->nullable()->default(null);
            $table->string('reps')->nullable()->default(null);
            $table->string('rest')->nullable()->default(null);
            $table->string('visibility')->default('Private');
            $table->string('logo')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workouts');
    }
};
