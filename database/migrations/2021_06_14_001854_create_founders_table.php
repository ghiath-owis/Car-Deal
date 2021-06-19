<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Founder;

class CreateFoundersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('founders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('photo')->nullable();
            $table->string('position')->nullable();
            $table->timestamps();
        });

        $founder = new Founder;
        $founder->first_name="ghiath";
        $founder->last_name="owis";
        $founder->phone="0941101108";
        $founder->email="ghiath.wd40@gmail.com";
        $founder->photo="ghioooo";
        $founder->position="damascus";
        $founder->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('founders');
    }
}
