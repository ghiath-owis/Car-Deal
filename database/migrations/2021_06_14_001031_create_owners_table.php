<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Owner;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('facebook')->nullable();
            $table->string('email')->unique();
            $table->timestamps();
        });

        $owner = new Owner;
        $owner->first_name = "ghiath";
        $owner->last_name = "owis";
        $owner->phone = "0941101108";
        $owner->facebook = "Ghiath Owis";
        $owner->email = "ghiath.wd40@gmail.com";
        $owner->save();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('owners');
    }
}
