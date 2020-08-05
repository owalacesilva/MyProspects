<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_contacts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('purchase_id')
                  ->constrained('purchases')
                  ->onDelete('cascade');
            $table->foreignId('contact_id')
                  ->constrained('contacts')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_contacts');
    }
}
