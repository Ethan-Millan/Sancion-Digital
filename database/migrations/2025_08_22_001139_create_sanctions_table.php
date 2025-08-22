<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('sanctions', function (Blueprint $table) {
            $table->id();
            $table->string('student_id');
            $table->string('guard_id');
            $table->date('date');
            $table->string('description');
            $table->boolean('paid')->default(false);
            $table->boolean('read')->default(false);
            $table->unsignedBigInteger('fine_id');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('sanctions');
    }
};
