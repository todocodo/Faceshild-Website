<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('billing_first_name');
            $table->string('billing_last_name');
            $table->string('billing_phone');
            $table->string('billing_email');
            $table->string('billing_company');
            $table->string('billing_country');
            $table->string('billing_city');
            $table->string('billing_address');
            $table->string('billing_postal_code');
            $table->string('billing_name_on_card');
            $table->integer('billing_subtotal');
            $table->integer('billing_tax');
            $table->integer('billing_total');
            $table->string('payment_gateway')->default('stripe');
            $table->boolean('shipped')->default(false);
            $table->string('error')->nullable();

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
        Schema::dropIfExists('orders');
    }
}
