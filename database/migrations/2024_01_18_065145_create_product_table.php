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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string("slug",length:2000);
            $table->string("title",length:2000);
            $table->string("image",length:2000);
            $table->string("image_mine");
            $table->integer("image_size");
            $table->longText("description");
            $table->decimal("price", total:10 ,places:2);
            // $table->foreignIdFor(model:User::class, column: "created_by")->nullable();
            // $table->foreignIdFor(model:User::class, column: "update_by")->nullable();
            $table->softDeletes();
            // $table->foreignIdFor( model:User::class, column: "deleted_by")->nullable();
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
        Schema::dropIfExists('product');
    }
};
