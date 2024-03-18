<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('donate_nows', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->float('amount')->nullable();
            $table->integer('donation_type')->nullable();
            $table->integer('payment_type')->comment('1=>monthly, 2=>annual, 3=>one_time')->nullable();
            $table->json('transaction_type')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('payment_ss')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donate_nows');
    }
};
