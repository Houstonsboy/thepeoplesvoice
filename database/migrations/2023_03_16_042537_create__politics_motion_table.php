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
        Schema::create('_politics_motion', function (Blueprint $table) {
            $table->id();
            
            $table->text('motion');
            $table->text('Description');
            $table->integer('Approve');
            $table->integer('DisApprove');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_politics_motion');
    }
};
