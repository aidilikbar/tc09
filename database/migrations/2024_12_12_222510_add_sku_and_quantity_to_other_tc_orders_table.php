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
        Schema::table('other_tc_orders', function (Blueprint $table) {
            $table->string('sku', 200)->nullable()->after('other_tc_order_status');
            $table->integer('quantity')->nullable()->after('sku');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('other_tc_orders', function (Blueprint $table) {
            $table->dropColumn(['sku', 'quantity']);
        });
    }
};
