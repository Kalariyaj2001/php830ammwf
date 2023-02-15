<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments("id");
            $table->string("productname");
            $table->string("price");
            // $table->integer("categoryid")->unsigned();
            // $table->foreign("categoryid")->references("id")->on("addcategories");
            // $table->integer("subcategoryid")->unsigned();
            // $table->foreign("subcategoryid")->references("id")->on("subcategories");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
