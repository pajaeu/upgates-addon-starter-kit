<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('token')->unique();
            $table->string('api_url');
            $table->string('api_user');
            $table->text('api_key');
            $table->string('billing_company')->nullable();
            $table->string('billing_company_id')->nullable();
            $table->string('billing_vat_id')->nullable();
            $table->string('billing_vat_country')->nullable();
            $table->string('billing_street')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_state')->nullable();
            $table->string('billing_zip')->nullable();
            $table->string('billing_country')->nullable();
            $table->timestamps();
        });
    }
};
