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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->date('start_date')->nullable();
            $table->date('request_date')->nullable();
            $table->decimal('price')->nullable();
            $table->date('payment_date')->nullable();
            $table->decimal('budget')->nullable();
            $table->date('end_date')->nullable();
            $table->string('status')->nullable();
            $table->decimal('cost')->nullable();
            $table->decimal('profit')->nullable();
            $table->string('identifier')->nullable();
            $table->foreignId('company_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
