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
        if (! Schema::hasColumn('ideas', 'state')) {
            Schema::table('ideas', function (Blueprint $table) {
                $table->string('state');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('ideas', 'state')) {
            Schema::table('ideas', function (Blueprint $table) {
                $table->dropColumn('state');
            });
        }
    }
};
