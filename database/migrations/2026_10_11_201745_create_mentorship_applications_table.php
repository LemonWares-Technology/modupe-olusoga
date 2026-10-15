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
        Schema::create('mentorship_applications', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('location');
            $table->string('current_role');
            $table->string('organisation')->nullable();
            $table->text('aspirations_and_goals');
            $table->text('six_month_objective');
            $table->text('why_now');
            $table->boolean('schedule_commitment')->default(false);
            $table->boolean('investment_acknowledged')->default(false);
            $table->string('status')->default('pending');
            $table->text('review_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentorship_applications');
    }
};
