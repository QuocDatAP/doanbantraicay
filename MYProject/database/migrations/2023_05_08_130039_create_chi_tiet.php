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
    Schema::create('fruit_details', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('fruit_id');
        $table->string('season');
        $table->string('origin');
        $table->date('expiration_date');
        $table->text('other_details')->nullable();
        $table->timestamps();
        $table->foreign('fruit_id')->references('id')->on('fruits')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet');
    }
};
