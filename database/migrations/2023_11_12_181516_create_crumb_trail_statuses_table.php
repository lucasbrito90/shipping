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
        Schema::create('crumb_trail_statuses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('status')->nullable();
            $table->text('description')->nullable();

            $table->foreignId('crumbs_trail_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crumb_trail_statuses');
    }
};
