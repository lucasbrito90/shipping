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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price')->nullable();
            $table->boolean('is_done')->nullable();
            $table->boolean('is_ready')->nullable();
            $table->boolean('is_shipped')->nullable();
            $table->unsignedBigInteger('type')->nullable();
            $table->string('identifier')->nullable();
            $table->foreignId('project_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
