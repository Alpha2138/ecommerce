<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTblProductTable extends Migration
{
    public function up()
    {
        Schema::table('tbl_product', function (Blueprint $table) {
            // Add or modify columns as needed
            // For example, if you want to add a new column:
            // $table->string('new_column')->nullable();
        });
    }

    public function down()
    {
        Schema::table('tbl_product', function (Blueprint $table) {
            // Rollback changes if necessary
            // $table->dropColumn('new_column');
        });
    }
}