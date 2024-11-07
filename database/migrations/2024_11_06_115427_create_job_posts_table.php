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
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();                          // Auto-incrementing ID
            $table->string('job_title');            // Job title
            $table->text('job_description');        // Job description
            $table->string('company_name');         // Company name
            $table->string('location');             // Location of the job
            $table->enum('job_type', ['Full-time', 'Part-time', 'Contract', 'Internship']); // Job type
            $table->string('salary_range')->nullable(); // Salary range
            $table->text('preferred_qualifications')->nullable(); // Preferred qualifications
            $table->text('job_requirements');      // Job specific requirements
            $table->text('benefits')->nullable();  // Benefits offered
            $table->date('application_deadline');  // Application deadline
            $table->string('contact_info');         // Contact information for application
            $table->text('company_overview');       // Company overview
            $table->text('work_environment')->nullable(); // Work environment details
            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_posts');
    }
};
