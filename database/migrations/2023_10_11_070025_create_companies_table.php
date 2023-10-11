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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->default('Laravel POS');
            $table->string('company_address')->default('Laravel POS address');
            $table->string('company_phone')->default('+84 0903821206');
            $table->string('company_email')->default('dhl13052001@gmail.com');
            $table->string('company_fax')->default('+2290 45585858');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
