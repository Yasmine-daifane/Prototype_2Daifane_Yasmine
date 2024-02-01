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
        Schema::create('autoformations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Titre');
            $table->timestamp('date_de_creation')->useCurrent();
            $table->timestamp('date_modification')->useCurrent();
            $table->string('reference')->unique();
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autoformations');
    }
};
