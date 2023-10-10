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
        Schema::create('corporate_partners', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('country_code')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corporate_partners');
    }
};
