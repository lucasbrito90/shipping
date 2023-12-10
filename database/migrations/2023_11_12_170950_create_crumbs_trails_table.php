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
        Schema::create('crumbs_trails', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('who')->nullable();
            $table->string('where')->nullable();
            $table->date('when')->nullable();
            $table->string('why')->nullable();
            $table->string('status')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('product_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crumbs_trails');
    }
};
