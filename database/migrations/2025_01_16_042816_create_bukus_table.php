<?php

use App\Models\kategoribuku;
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
        schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column:'kategoriId')->constrained(table:'kategoribukus');
            $table->string('judul');
            $table->string('penulis');
            $table->string('penerbit');
            $table->string('tahunterbit');
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
        Schema::dropIfExists('bukus');
    }
};
