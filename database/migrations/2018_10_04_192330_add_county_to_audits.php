<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCountyToAudits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('audit_reports', function($table) {
            $table->string('county');
            $table->string('type');
            $table->year('year');
            $table->string('meetings');
            $table->boolean('deferred');
            $table->boolean('early');
            $table->date('early_date');
            $table->time('early_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('audit_reports', function($table) {
            $table->dropColumn('county');
            $table->dropColumn('type');
            $table->dropColumn('years');
            $table->dropColumn('meetings');
            $table->dropColumn('deferred');
            $table->dropColumn('early');
            $table->dropColumn('early_date');
            $table->dropColumn('early_time');
        });
    }
}
