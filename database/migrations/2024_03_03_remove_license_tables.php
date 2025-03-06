<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Remove any license-related tables if they exist
        Schema::dropIfExists('licenses');
        Schema::dropIfExists('activations');
        Schema::dropIfExists('liquid_downloads');
    }

    public function down()
    {
        // Leave empty as we don't want to recreate these tables
    }
}; 