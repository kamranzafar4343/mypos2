<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::table('add_accounts', function (Blueprint $table) {
        $table->string('child')->nullable()->after('sub_head_name');
    });
}

public function down(): void
{
    Schema::table('add_accounts', function (Blueprint $table) {
        $table->dropColumn('child');
    });
}

};
