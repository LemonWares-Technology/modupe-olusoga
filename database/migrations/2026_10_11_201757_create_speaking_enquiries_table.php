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
        Schema::create('speaking_enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('organisation');
            $table->string('job_title')->nullable();
            $table->string('engagement_type');
            $table->string('proposed_date')->nullable();
            $table->string('location_type')->default('In-Person');
            $table->string('event_location')->nullable();
            $table->string('audience_profile')->nullable();
            $table->string('expected_participants')->nullable();
            $table->text('topic_objectives');
            $table->text('additional_info')->nullable();
            $table->string('status')->default('new');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('speaking_enquiries');
    }
};
