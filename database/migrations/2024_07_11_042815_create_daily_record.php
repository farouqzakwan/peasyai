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
        Schema::create('DailyRecord', function (Blueprint $table) {
            $table->date('date');
            $table->integer('male_count');
            $table->integer('female_count');
            $table->integer('male_avg_age');
            $table->integer('female_avg_age');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DailyRecord');
    }
};
