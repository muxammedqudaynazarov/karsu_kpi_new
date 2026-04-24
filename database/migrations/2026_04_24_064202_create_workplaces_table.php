<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('workplaces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('department_id')->constrained('departments')->cascadeOnDelete();
            $table->foreignId('academic_degree_id')->constrained('academic_degrees')->cascadeOnDelete();
            $table->foreignId('academic_rank_id')->constrained('academic_ranks')->cascadeOnDelete();
            $table->foreignId('form_id')->constrained('employment_forms')->cascadeOnDelete();
            $table->foreignId('staff_id')->constrained('staff_positions')->cascadeOnDelete();
            $table->foreignId('staff_position_id')->constrained('staff_positions')->cascadeOnDelete();
            $table->foreignId('status_id')->constrained('employee_statuses')->cascadeOnDelete();
            $table->foreignId('type_id')->constrained('employee_types')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('workplaces');
    }
};
