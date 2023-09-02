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
        Schema::create('conis', function (Blueprint $table) {
            $table->id();
            $table->string('dollars_shekels_sale');
            $table->string('dollars_shekels_buying');
            $table->string('dinar_shekel_sale');
            $table->string('dinar_shekel_buying');
            $table->string('dollars_dinars_sale');
            $table->string('dollars_dinars_buying');
            $table->string('euro_shekel_sale');
            $table->string('euro_shekel_buying');
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
        Schema::dropIfExists('conis');
    }
};
