<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('client_invoices', function (Blueprint $table) {
            $table->string('bank_ac_number_lkr')->default('204100160016433 LKR')->change();
            $table->string('bank_ac_number_usd')->nullable()->default('204402160016433 USD')->change();
        });
    }

    public function down(): void
    {
        Schema::table('client_invoices', function (Blueprint $table) {
            $table->string('bank_ac_number_lkr')->default('20410016001643 LKR')->change();
            $table->string('bank_ac_number_usd')->nullable()->default('20440216001643 USD')->change();
        });
    }
};
