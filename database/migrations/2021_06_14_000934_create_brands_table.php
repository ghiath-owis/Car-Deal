<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Brand;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name")->nullable();
            $table->string('logo')->nullable();
            $table->bigInteger('modell_id')->unsigned();
            $table->foreign('modell_id')->references('id')->on('modells')->onDelete('cascade');

            $table->timestamps();
        });

        $brand = new Brand;
        $brand->name = "KIA";
        $brand->logo = "";
        $brand->modell_id = "1";
        $brand->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brands');
    }
}
