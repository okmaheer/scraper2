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
        Schema::table('manhwas', function (Blueprint $table) {
            $table->foreignId('post_id_2')->nullable()->after('post_id');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('manhwas', function (Blueprint $table) {
            $table->dropColumn(['post_id_2']);
        });
    }
};
