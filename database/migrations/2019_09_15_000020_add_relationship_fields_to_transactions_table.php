<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->foreignId('project_id')->nullable()->constrained();
            $table->foreignId('transaction_type_id')->nullable()->constrained();
            $table->foreignId('income_source_id')->nullable()->constrained();
            $table->foreignId('currency_id')->nullable()->constrained();
        });
    }
};
