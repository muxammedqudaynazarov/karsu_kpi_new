<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->index()->primary();
            $table->json('name');
            $table->text('logo')->nullable();
            $table->text('api_key')->nullable();
            $table->string('client_id')->nullable();
            $table->text('client_secret')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};
