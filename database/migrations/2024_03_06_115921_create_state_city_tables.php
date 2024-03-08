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
        Schema::create('states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');   
            $table->string('code');
            $table->timestamps();
        });
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('state_id');           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('states');
        Schema::drop('cities');
    }
};
