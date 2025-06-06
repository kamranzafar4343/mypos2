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
        Schema::table('products', function (Blueprint $table) {
            $table->integer('single_carton_purchase')->nullable()->after('purchase_rate');
            $table->integer('single_carton_retail')->nullable()->after('retail_rate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('single_carton_purchase')->nullable()->after('purchase_rate');
            $table->integer('single_carton_retail')->nullable()->after('retail_rate');
        });
    }
};
