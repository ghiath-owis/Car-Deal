<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Transmission;
use App\Http\Enums\Transmissions;

class CreateTransmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transmissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('type',[Transmissions::AUTOMATIC,Transmissions::MANUAL,Transmissions::TIPTRONIC])->default(Transmissions::AUTOMATIC);
            $table->timestamps();
        });

        $transmission = new Transmission;
        $transmission->type="AUTOMATIC";
        $transmission->save();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transmissions');
    }
}
