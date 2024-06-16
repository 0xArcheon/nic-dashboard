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
        Schema::create('scheme', function (Blueprint $table) {
            $table->id();
            $table->string('scheme_code');
            $table->string('scheme_name');
            $table->string('central_state_scheme');
            $table->string('fin_year');
            $table->string('state_disbursement');
            $table->string('central_disbursement');
            $table->string('total_disbursement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scheme');
    }
};
