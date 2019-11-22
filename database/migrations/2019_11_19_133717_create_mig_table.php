<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mig', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("titel");
            $table->timestamps();
            $table->string("test");
            $table->boolean("janein");
            $table->timestamp("getestet am")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mig');
    }
}
