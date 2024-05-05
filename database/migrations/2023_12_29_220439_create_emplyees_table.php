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
        Schema::create('emplyees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('password');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('number_phone')->unique();
            $table->string('address');
            $table->date('born_in');
            $table->string('number_id');
            $table->bigInteger('workerAt_id')->unsigned();
            $table->foreign('workerAt_id')->references('id')->on('places')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('gender_id')->unsigned();
            $table->foreign('gender_id')->references('id')->on('genders')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('specialization_id')->unsigned();
            $table->foreign('specialization_id')->references('id')->on('specializations')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('nationalitie_id')->unsigned();
            $table->foreign('nationalitie_id')->references('id')->on('nationalities')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emplyees');
    }
};
