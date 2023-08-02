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
        Schema::create('attributes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('character_id');
            $table->unsignedTinyInteger('quality');
            $table->unsignedBigInteger('attribute_type_id');
            $table->unsignedBigInteger('type_id');
            $table->timestamps();

            $table->foreign('character_id', 'attribute_character_fk')->references('id')->on('characters');
            $table->foreign('attribute_type_id', 'attribute_attribute_type_fk')->references('id')->on('attribute_types');
            $table->foreign('type_id', 'attribute_type_fk')->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attributes');
    }
};
