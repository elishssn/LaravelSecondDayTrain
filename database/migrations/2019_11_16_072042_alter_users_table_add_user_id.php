<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTableAddUserId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//bila commit dia baca code up
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()//bila rollback dia baca code down
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
}
