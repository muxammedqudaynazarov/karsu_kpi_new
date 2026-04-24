<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('datum_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('datum_id')->constrained('data')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->enum('type', ['success', 'error', 'info', 'warning'])->default('success');
            $table->text('message')->nullable();
            /*
            01 - file created
            */
            $table->string('message_type')->default('01');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('datum_histories');
    }
};
