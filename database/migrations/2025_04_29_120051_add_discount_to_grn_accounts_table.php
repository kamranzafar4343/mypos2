<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('grn_accounts', function (Blueprint $table) {
            $table->decimal('discount', 10, 2)->nullable()->after('vendor_net_amount');
        });
    }
    
    public function down()
    {
        Schema::table('grn_accounts', function (Blueprint $table) {
            $table->dropColumn('discount');
        });
    }
    
};
