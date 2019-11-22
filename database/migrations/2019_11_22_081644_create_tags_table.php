<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string("name");
        });

        Schema::create("serien_tag", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->unsignedBigInteger("serien_id");
            $table->unsignedBigInteger("tag_id");
            $table->timestamps();

            $table->unique(["serien_id", "tag_id"]);

            $table->foreign("serien_id")
                ->references("id")
                ->on("seriens")
                ->onDelete("cascade");
            $table->foreign("tag_id")
                ->references("id")
                ->on("tags")
                ->onDelete("cascade");
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
