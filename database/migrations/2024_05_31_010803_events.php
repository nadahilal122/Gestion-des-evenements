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
        Schema::create('events', function (Blueprint $table) {
            $table->id(); 
            $table->string('title');
            $table->string('photo');
            $table->string('ville');
            $table->text('description');
            $table->date('date_deput')->default(now()); // Set default value to current date/time
            $table->foreignId('client_id')->constrained()->cascadeOnDelete();
            $table->foreignId('event_type_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
