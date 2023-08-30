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
        Schema::table('arts', function (Blueprint $table) {
            $table->text('first_stage_condition')->nullable();
            $table->text('second_stage_condition')->nullable();
            $table->text('third_stage_condition')->nullable();
            $table->text('fourth_stage_condition')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('arts', function (Blueprint $table) {
            $table->dropColumn(['first_stage_condition', 'second_stage_condition', 'third_stage_condition', 'fourth_stage_condition']);
        });
    }
};
