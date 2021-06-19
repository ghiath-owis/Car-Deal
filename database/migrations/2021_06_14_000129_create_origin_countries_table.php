<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\OriginCountry;

class CreateOriginCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('origin_countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name")->nullable();

            $table->timestamps();
        });

        $origin_country = new OriginCountry;
        $origin_country->name="syria";
        $origin_country->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('origin_countries');
    }
}
