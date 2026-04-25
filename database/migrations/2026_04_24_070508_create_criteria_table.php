<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('criteria', function (Blueprint $table) {
            $table->id();
            $table->json('name');
            $table->json('desc')->nullable();
            $table->foreignId('parent_id')->nullable()->constrained('criteria')->cascadeOnDelete();
            // Amal qilishi
            $table->string('observation')->nullable();
            $table->foreign('observation')->references('code')->on('observances')->cascadeOnDelete();
            $table->foreignId('report_id')->constrained('reports')->cascadeOnDelete();
            $table->foreignId('formula_id')->nullable()->constrained('formulas')->cascadeOnDelete();
            $table->string('integrate')->nullable();
            $table->string('checking')->default('manual');
            $table->text('ai_prompt')->nullable();
            $table->enum('upload', ['0', '1'])->default('0');
            $table->enum('status', ['0', '1'])->default('0');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('criteria');
    }
};
