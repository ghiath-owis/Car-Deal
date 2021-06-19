<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Body;
use App\Http\Enums\Bodies;

class CreateBodiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bodies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('name',[Bodies::TWO_DOOR,Bodies::FOUR_DOOR,Bodies::SEDAN,Bodies::SUV,Bodies::SPORT,Bodies::HATCHBACK,Bodies::OTHER])->default(Bodies::FOUR_DOOR);
            $table->timestamps();
        });

        $body = new Body;
        $body->name="FOUR_DOOR";
        $body->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bodies');
    }
}
