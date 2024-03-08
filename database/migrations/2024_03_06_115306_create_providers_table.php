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
        Schema::create('provider_group', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');         
            $table->timestamps();
        });
        Schema::create('provider_unit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');          
            $table->timestamps();
        });

        Schema::create('timezone', function (Blueprint $table) {
            $table->increments('id');
            $table->string('timezone');          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('provider_group');
        Schema::drop('provider_unit');
        Schema::drop('timezone');
    }
};
