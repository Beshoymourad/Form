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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('NAME')->nullable()->default(null);
            $table->string('EMAIL')->nullable()->default(null);
            $table->bigInteger('CONTACT_NO')->nullable()->default(null);
            $table->string('MESSAGE')->nullable()->default(null);

            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
