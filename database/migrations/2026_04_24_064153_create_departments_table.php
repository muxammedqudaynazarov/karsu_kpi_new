<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->index()->primary();
            $table->json('name');
            $table->foreignId('parent_id')->nullable()->constrained('departments')->cascadeOnDelete();
            $table->string('evaluation')->nullable();
            $table->foreign('evaluation')->references('code')->on('evaluations')->cascadeOnDelete();
            $table->enum('access', ['0', '1'])->default('1');
            $table->enum('status', ['0', '1'])->default('1');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
