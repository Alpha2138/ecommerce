<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUpdatedAtToTblProduct extends Migration
{
    public function up()
    {
        Schema::table('tbl_product', function (Blueprint $table) {
            $table->timestamp('updated_at')->nullable(); // Add updated_at column
        });
    }

    public function down()
    {
        Schema::table('tbl_product', function (Blueprint $table) {
            $table->dropColumn('updated_at'); // Remove updated_at column if rolling back
        });
    }
}