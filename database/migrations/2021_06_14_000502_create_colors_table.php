<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Color;
use App\Http\Enums\Colors;

class CreateColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('name',[Colors::RED,Colors::BLUE,Colors::GREEN,Colors::BLACK,Colors::WHITE,Colors::GRAY,Colors::YELLOW,Colors::PINK,Colors::PURPLE,Colors::BROWN,Colors::OTHER])->default(Colors::OTHER);
            $table->timestamps();
        });

        $color = new Color;
        $color->name="OTHER";
        $color->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colors');
    }
}
