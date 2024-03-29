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
        Schema::create('clinic_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clinic_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('age');
            $table->string('gender');
            $table->string('city');
            $table->string('number');
            $table->string('notes')->nullable();
            $table->boolean('status')->default(false);
            $table->boolean('seen')->default(false);
            $table->dateTime('date_at')->nullable();
            $table->date('date_str')->nullable();
            $table->time('time_str')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinic_bookings');
    }
};
