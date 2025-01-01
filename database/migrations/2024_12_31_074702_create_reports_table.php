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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->enum('report_type', ['daily', 'monthly', 'yearly']);
            $table->date('report_date')->default(now()->toDateString());
            $table->integer('total_data')->default(0);
            $table->decimal('total_t_bongkar', 65, 3)->default(0);
            $table->decimal('total_t_muat', 65, 3)->default(0);
            $table->decimal('total_t_bongkar_muat', 65, 3)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};