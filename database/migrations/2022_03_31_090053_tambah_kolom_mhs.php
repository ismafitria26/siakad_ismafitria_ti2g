<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahKolomMhs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswa', function (Blueprint $table){
            $table->string('jenis_kelamin', 20)->after('nama')->nullable();
            $table->string('email', 50)->after('nama')->nullable();
            $table->text('alamat')->after('jenis_kelamin')->nullable();
            $table->date('tanggal_lahir')->after('jenis_kelamin')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswa', function (Blueprint $table){
            $table->dropColumn('jenis_kelamin');
            $table->dropColumn('email');
            $table->dropColumn('alamat');
            $table->dropColumn('tanggal_lahir');
        });
    }
}
