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
        Schema::table('renters', function (Blueprint $table){
            $table->dropColumn('firstname');
            $table->dropColumn('middlename');
            $table->text('initials');
            $table->text('phonenumber')->nullable()->change();
            $table->integer('house_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('renters', function (Blueprint $table) {
            $table->text('firstname');
            $table->text('middlename');
            $table->dropColumn('initials');
            $table->dropColumn('phonenumber');
            $table->dropColumn('house_id');
        });
    }
};
