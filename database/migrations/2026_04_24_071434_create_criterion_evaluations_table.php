<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('criterion_evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('criterion_id')->constrained('criteria')->cascadeOnDelete();
            $table->string('evaluation')->nullable();
            $table->foreign('evaluation')->references('code')->on('evaluations')->cascadeOnDelete();
            $table->enum('has', ['0', '1'])->default('1');
            $table->integer('score')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('criterion_evaluations');
    }
};
