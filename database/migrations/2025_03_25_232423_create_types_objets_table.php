<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('types_objets', function (Blueprint $table) {
            $table->id();
            $table->string('nom'); // Ex: Lampe, Thermostat, etc.
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('types_objets');
    }
};
