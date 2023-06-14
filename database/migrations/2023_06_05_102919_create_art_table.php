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
        Schema::create('arts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('attributes');
            $table->text('description');
            $table->unsignedTinyInteger('type');
            $table->string('first_stage_name');
            $table->text('first_stage_description');
            $table->string('second_stage_name');
            $table->text('second_stage_description');
            $table->string('third_stage_name');
            $table->text('third_stage_description');
            $table->string('fourth_stage_name');
            $table->text('fourth_stage_description');
            $table->timestamps();
            $table->softDeletes();
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
