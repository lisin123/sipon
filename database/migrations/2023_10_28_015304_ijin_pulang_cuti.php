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
        //
        Schema::create('ijin_pulang_cuti', function (Blueprint $table) {
            $table->string('type'); //pulang atau cuti
            $table->string('nis');
            $table->string('reason');
            $table->string('start_date');
            $table->string('finish_date');
            $table->string('is_come');
            $table->string('late');
            $table->string('charge');
            $table->string('is_paid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('ijin_pulang_cuti');
    }
};
