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
        Schema::create('diplomas', function (Blueprint $table) {
            $table->id();
            $table->string('diploma_id');
            $table->string('name');
            $table->string('last_name');
            $table->string('father_name');
            $table->string('g_father_name');
            $table->date('date_of_birth');
            $table->date('addmission_date');
            $table->date('graduation_date');
            $table->string('department');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->boolean('monograph_completed')->default(false);
            $table->string('province');
            $table->string('district');
            $table->string('village');
            $table->string('current_province');
            $table->string('current_district');
            $table->string('current_village');
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
        Schema::dropIfExists('diplomas');
    }
};
