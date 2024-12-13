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
            if (!Schema::hasColumn('other_tc_orders', 'othertcorderid')) {
                $table->string('othertcorderid', 200)->nullable()->after('other_tc_order_id');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('other_tc_orders', function (Blueprint $table) {
            // Remove the othertcorderid column
            $table->dropColumn('othertcorderid');
        });
    }
};
