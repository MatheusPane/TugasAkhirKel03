<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('data_keluarga_anggota', function (Blueprint $table) {
            $table->id();
            $table->foreignId('keluarga_id')->constrained('data_keluarga')->cascadeOnDelete();
            $table->foreignId('warga_id')->constrained('data_warga')->cascadeOnDelete();
            $table->foreignId('status_dalam_keluarga_id')->constrained('ref_status_dalam_keluarga')->nullOnDelete();
        
            // audit & control
            $table->timestamps();
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();
            $table->boolean('active')->default(true);
        
            $table->unique(['keluarga_id', 'warga_id']);
        });        
    }

    public function down()
    {
        Schema::dropIfExists('data_keluarga_anggota');
    }
};
