<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('data_warga', function (Blueprint $table) {
            $table->id();
            $table->string('no_registrasi')->nullable()->index();
            $table->string('no_ktp')->nullable()->index();
            $table->string('nama');
            $table->string('jabatan')->nullable();
            $table->enum('jenis_kelamin', ['L','P'])->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();

            // foreign keys
            $table->foreignId('status_perkawinan_id')->nullable()->constrained('ref_status_perkawinan')->nullOnDelete();
            $table->foreignId('agama_id')->nullable()->constrained('ref_agama')->nullOnDelete();
            $table->foreignId('pendidikan_id')->nullable()->constrained('ref_pendidikan')->nullOnDelete();
            $table->foreignId('pekerjaan_id')->nullable()->constrained('ref_pekerjaan')->nullOnDelete();

            // tambahan field
            $table->enum('ikut_paud', ['ya', 'tidak'])->default('tidak');
            $table->enum('ikut_koperasi', ['ya', 'tidak'])->default('tidak');
            $table->enum('memiliki_tabungan', ['ya', 'tidak'])->default('tidak');

            // audit & control
            $table->timestamps();
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();
            $table->boolean('active')->default(true);

            $table->unique(['no_registrasi', 'no_ktp'], 'datawarga_no_reg_ktp_unique');
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_warga');
    }
};
