<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Client;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });

        $client = new Client;
        $client->first_name="ghiath";
        $client->last_name="owis";
        $client->username="gio";
        $client->email="ghiath.wd40@gmail.com";
        $client->password= bcrypt('gh1234');
        $client->phone="0941101108";
        $client->address="damascus";
        $client->photo="";

        $client->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
