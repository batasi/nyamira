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
        Schema::table('work_tickets', function (Blueprint $table) {
            $table->text('approval_remarks')->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->string('estimated_distance')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('work_tickets', function (Blueprint $table) {
             $table->dropColumn(['approval_remarks']);
             $table->dropColumn(['department_id']);
             $table->dropColumn(['estimated_distance']);
        });
    }
};
