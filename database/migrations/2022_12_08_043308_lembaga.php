<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_lembaga', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_app_lembaga');
            $table->bigInteger('id_ref_produk');
            $table->string('sub_domain');
            $table->string('nama_database');
            $table->string('user_database');
            $table->string('nama_lembaga');
            $table->bigInteger('server_service');
            $table->string('kode_lkm');
            $table->string('type_koperasi');
            $table->bigInteger('template_ibslite');
            $table->string('port');
            $table->date('tgl_setup');
            $table->enum('status_service_gwlite', ['UP', 'DOWN', 'TIDAK ADA']);
            $table->enum('status_service_gwlkm', ['UP', 'DOWN', 'TIDAK ADA']);
            $table->enum('status_service_gwibslite', ['UP', 'DOWN', 'TIDAK ADA']);
            $table->enum('status_service_ereg', ['UP', 'DOWN', 'TIDAK ADA']);
            $table->enum('status_service_core', ['UP', 'DOWN', 'TIDAK ADA']);
            $table->enum('status_service_marketplace', ['UP', 'DOWN', 'TIDAK ADA']);
            $table->enum('status_va', ['UP', 'DOWN', 'TIDAK ADA']);
            $table->enum('status_kartu_santri', ['UP', 'DOWN', 'TIDAK ADA']);
            $table->enum('status_mikropay', ['UP', 'DOWN', 'TIDAK ADA']);
            $table->enum('status_qris', ['UP', 'DOWN', 'TIDAK ADA']);
            $table->string('alamat');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('nama_pic');
            $table->string('no_hp_pic');
            $table->string('data_migrasi');
            $table->string('status_pks');
            $table->string('kode_ikm');
            $table->string('kode_bon_va');
            $table->bigInteger('client'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_lembaga');
    }
};
