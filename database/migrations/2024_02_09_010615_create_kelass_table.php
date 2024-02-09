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
        Schema::create(table: 'kelass', callback: function (Blueprint $table) {
            $table->id(column: 'id_kelass');
            $table->string(column: 'nama_kelas', length:10);
            $table->string(column: 'kompetensi', length:50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelass');
    }
};
