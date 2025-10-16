<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('my_company_infos', function (Blueprint $table) {
            $table->string('zip')->nullable()->after('name');           // 郵便番号
            $table->string('address')->nullable();
            $table->string('tel')->nullable();
            $table->string('email')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_branch')->nullable();
            $table->string('bank_type')->nullable();
            $table->string('bank_number')->nullable();
            $table->text('note')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('my_company_infos', function (Blueprint $table) {
            $table->dropColumn([
                'zip', 'address', 'tel', 'email',
                'bank_name', 'bank_branch', 'bank_type', 'bank_number', 'note'
            ]);
        });
    }
};
