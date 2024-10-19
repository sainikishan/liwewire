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
        Schema::create('services_tabel', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("description");
            $table->string("short_desc");
            $table->string("icon_class")->nullable();
            $table->string("status")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_tabel');
    }
};
