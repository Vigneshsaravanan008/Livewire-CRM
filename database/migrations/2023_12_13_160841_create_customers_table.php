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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('logo');
            $table->string('company_url')->nullable();
            $table->string('gst_no')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('address')->nullable();
            $table->integer('status')->comment('1:active:0:inactive')->default(1);
            $table->integer('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->integer('state')->references('id')->on('states')->onDelete('cascade');
            $table->string('city');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
