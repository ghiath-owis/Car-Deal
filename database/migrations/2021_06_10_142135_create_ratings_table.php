<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Rating;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('final_rate')->nullable();
            $table->integer('sum_of_ratings')->nullable();
            $table->integer('sum_of_raters')->nullable();
            $table->timestamps();
        });

        
        $rate = new Rating;
        $rate->final_rate = "3";
        $rate->sum_of_ratings = "3";
        $rate->sum_of_raters = "1";
        $rate->save();
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratings');
    }
}
