<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        DB::table('types')->insert([
            ['name' => 'Appetizer'],
            ['name' => 'Main Course'],
            ['name' => 'Desserts'],
            ['name' => 'Drinks'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('types');
    }
};
