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
        Schema::create('grasyatb', function (Blueprint $table) {
           $table->increments('id',true);
            $table->string('firstname');
         
            $table->string('lastname');
            $table->string('middlename');
            $table->string('address');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('zip');
             $table->date('BOD');
            $table->date('DOH');
            $table->string('department');

            $table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grasyatb');
    }
};
