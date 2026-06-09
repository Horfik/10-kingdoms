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
        Schema::create('art', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->text('attributes');
            $table->string('type');
            $table->string('first_stage_name');
            $table->text('first_stage_description');
            $table->text('first_stage_condition')->nullable();
            $table->string('second_stage_name');
            $table->text('second_stage_description');
            $table->text('second_stage_condition')->nullable();
            $table->string('third_stage_name');
            $table->text('third_stage_description');
            $table->text('third_stage_condition')->nullable();
            $table->string('fourth_stage_name');
            $table->text('fourth_stage_description');
            $table->text('fourth_stage_condition')->nullable();
            $table->boolean('is_fairy');
            $table->boolean('is_continent');
            $table->boolean('is_available_from_start');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('art');
    }
};
