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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->time('hours');
            $table->string('description')->nullable()->default('Descrição não anexada');
            $table->integer('vacancies');
            $table->foreignId('event_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('vacancies_filled')->nullable();
            $table->string('supervisor')->nullable()->default('Supervisor não Anexado');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('activities', function (Blueprint $table) {
            $table->softDeletes();
        });
    }
};
