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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->constrained(); //dia akan access table book, and look for column id (kiri table, kanan column)
            $table->foreignId('member_id')->constrained();
            $table->string('member_icNum'); //member tu nama table, icNum nama column
            $table->string('borrowingDate');
            $table->string('returnDate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
