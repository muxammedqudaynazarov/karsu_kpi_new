<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->json('material')->nullable();
            $table->foreignId('criterion_id')->constrained('criteria')->cascadeOnDelete();
            $table->enum('status', ['received', 'checking', 'accepted', 'cancelled', 'deleted'])->default('received');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
