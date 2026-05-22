<?php

use App\Models\Kategoria;
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
        Schema::create('esemenies', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('kategoria_id')->default(1);
            $table->string('esemeny_nev')->value(20);
            $table->longText('leiras');
            $table->date('datum')->default(today());
            $table->integer('resztvevok');
            $table->integer('ar');
            $table->string('kepUrl')->default(1);
            $table->timestamps();
        });
    }

  
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('esemenies');
    }

    //   public function kategoriak(){
    //     return $this->belongsTo(Kategoria::class);
    // } (itt a belongsTo-t nem ismeri fel)

};


