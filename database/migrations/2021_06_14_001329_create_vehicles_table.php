<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Vehicle;
use App\Http\Enums\Fuel;
use App\Http\Enums\Conditions;
use App\Http\Enums\Transmissions;


class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text("description")->nullable();
            $table->boolean("is_available")->default('0');
            $table->integer("engine_force")->nullable();
            $table->string('logo')->nullable();
            $table->enum('fuel',[Fuel::BENZIN,Fuel::DIESEL,Fuel::ELICTRIC,Fuel::OTHER])->default(Fuel::BENZIN);
            $table->integer("kilometrage")->nullable();
            $table->integer("max_speed")->nullable();
            $table->enum('status',[Conditions::NEW,Conditions::USED])->default(Conditions::NEW);
            $table->double("price")->nullable();
            $table->boolean("has_offer")->default('0');
            $table->double("price_after_offer")->nullable();
            $table->string('origin_country')->nullable();
            $table->integer('year')->nullable();
            $table->enum('transmission',[Transmissions::MANUAL, Transmissions::AUTOMATIC, Transmissions::TIPTRONIC])->default(Transmissions::AUTOMATIC);
            $table->enum('interior_color', ['other', 'red', 'yellow', 'blue', 'green', 'white', 'black', 'purple', 'pink', 'gray', 'gold'])->default('other');
            $table->enum('exterior_color', ['other', 'red', 'yellow', 'blue', 'green', 'white', 'black', 'purple', 'pink', 'gray', 'gold'])->default('other');


            $table->bigInteger('buy_id')->unsigned();
            $table->foreign('buy_id')->references('id')->on('contract_buys')->onDelete('cascade');
            $table->bigInteger('owner_id')->unsigned();
            $table->foreign('owner_id')->references('id')->on('owners')->onDelete('cascade');
            // $table->bigInteger('origin_country_id')->unsigned();
            // $table->foreign('origin_country_id')->references('id')->on('origin_countries')->onDelete('cascade');
            // $table->bigInteger('condition_id')->unsigned();
            // $table->foreign('condition_id')->references('id')->on('conditions')->onDelete('cascade');
            // $table->bigInteger('year_id')->unsigned();
            // $table->foreign('year_id')->references('id')->on('years')->onDelete('cascade');
            $table->bigInteger('transmission_id')->unsigned();
            $table->foreign('transmission_id')->references('id')->on('transmissions')->onDelete('cascade');
            $table->bigInteger('body_id')->unsigned();
            $table->foreign('body_id')->references('id')->on('bodies')->onDelete('cascade');
            // $table->bigInteger('exterior_id')->unsigned();
            // $table->foreign('exterior_id')->references('id')->on('colors')->onDelete('cascade');
            // $table->bigInteger('interior_id')->unsigned();
            // $table->foreign('interior_id')->references('id')->on('colors')->onDelete('cascade');
            // $table->bigInteger('address_id')->unsigned();
            // $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
            $table->bigInteger('rating_id')->unsigned();
            $table->foreign('rating_id')->references('id')->on('ratings')->onDelete('cascade');
            // $table->bigInteger('coin_id')->unsigned();
            // $table->foreign('coin_id')->references('id')->on('coins')->onDelete('cascade');
            $table->bigInteger('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->bigInteger('special_offer_id')->unsigned();
            $table->foreign('special_offer_id')->references('id')->on('special_offers')->onDelete('cascade');

            $table->timestamps();
        });

        $vehicle = new Vehicle;
        $vehicle->description = "best car";
        $vehicle->is_available = "1";
        $vehicle->engine_force = "1600";
        $vehicle->logo = "";
        $vehicle->fuel = "BENZIN";
        $vehicle->kilometrage = "120000";
        $vehicle->max_speed = "320";
        $vehicle->status = Conditions::NEW;
        $vehicle->price = "7000000";
        $vehicle->has_offer = "0";
        $vehicle->price_after_offer = "7000000";
        $vehicle->buy_id = "1";
        $vehicle->owner_id = "1";
        $vehicle->origin_country = "Germany";
        // $vehicle->condition = Conditions::NEW;
        $vehicle->year = 2021;
        $vehicle->transmission = Transmissions::AUTOMATIC;
        $vehicle->transmission_id = "1";
        $vehicle->body_id = "1";
        $vehicle->exterior_color = 1;
        $vehicle->interior_color = 1;
        $vehicle->rating_id = "1";
        $vehicle->brand_id = "1";
        $vehicle->special_offer_id = "1";
        $vehicle->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
