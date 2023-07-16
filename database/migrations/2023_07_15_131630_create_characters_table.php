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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('race_id');
            $table->integer('version');
            $table->string('name');
            $table->string('concept');
            $table->string('player');
            $table->integer('experience')->nullable();
            $table->integer('age')->nullable();;
            $table->integer('money')->nullable();
            $table->integer('will')->nullable();
            $table->integer('nightmare')->nullable();
            $table->integer('chaos')->nullable();
            $table->integer('reroll')->nullable();
            $table->string('avatar_url')->nullable();
            $table->string('avatar_path')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id', 'character_user_fk')->references('id')->on('users');
            $table->foreign('race_id', 'character_race_fk')->references('id')->on('races');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
