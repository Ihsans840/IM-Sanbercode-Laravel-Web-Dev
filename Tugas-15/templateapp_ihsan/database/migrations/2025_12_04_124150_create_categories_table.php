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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->text('description')->nullable(); // TEXT(500) di ERD, di migration cukup text()
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
}
};
