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
        Schema::create('rfq_requests', function (Blueprint $table) {

            $table->id();

            /*
            |--------------------------------------------------------------------------
            | COMPANY INFORMATION
            |--------------------------------------------------------------------------
            */

            $table->string('company');
            $table->string('company_type');


            /*
            |--------------------------------------------------------------------------
            | CONTACT INFORMATION
            |--------------------------------------------------------------------------
            */

            $table->string('name');
            $table->string('position')->nullable();
            $table->string('email');
            $table->string('phone');


            /*
            |--------------------------------------------------------------------------
            | PROJECT INFORMATION
            |--------------------------------------------------------------------------
            */

            $table->string('project_name');
            $table->string('service');
            $table->string('project_location');
            $table->string('project_status');


            /*
            |--------------------------------------------------------------------------
            | BUDGET & TIMELINE
            |--------------------------------------------------------------------------
            */

            $table->string('budget')->nullable();
            $table->string('timeline')->nullable();


            /*
            |--------------------------------------------------------------------------
            | PROJECT DETAILS
            |--------------------------------------------------------------------------
            */

            $table->text('description');


            /*
            |--------------------------------------------------------------------------
            | SUPPORTING DOCUMENT
            |--------------------------------------------------------------------------
            */

            $table->string('document')->nullable();


            /*
            |--------------------------------------------------------------------------
            | AGREEMENT
            |--------------------------------------------------------------------------
            */

            $table->boolean('agreement')->default(false);


            /*
            |--------------------------------------------------------------------------
            | RFQ STATUS
            |--------------------------------------------------------------------------
            */

            $table->enum('status', [
                'new',
                'reviewing',
                'contacted',
                'quoted',
                'completed',
                'rejected'
            ])->default('new');


            /*
            |--------------------------------------------------------------------------
            | TIMESTAMPS
            |--------------------------------------------------------------------------
            */

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rfq_requests');
    }
};
