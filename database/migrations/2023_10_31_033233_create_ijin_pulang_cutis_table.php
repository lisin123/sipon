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
        Schema::create('ijin_pulang_cutis', function (Blueprint $table) {
            $table->string('type'); //pulang atau cuti
            $table->string('nis');
            $table->string('reason');
            $table->string('start_date');
            $table->string('finish_date');
            $table->string('is_come')->nullable();
            $table->string('late')->nullable();
            $table->string('charge')->nullable();
            $table->string('is_paid')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ijin_pulang_cutis');
    }
};
