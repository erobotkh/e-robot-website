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
        Schema::create('achievments', function (Blueprint $table) {
            $table->id();
            $table->integer('num_member');
            $table->integer('num_student');
            $table->integer('num_intership');
            $table->integer('num_social_impact');
            $table->integer('num_province');
            $table->integer('num_project');
            $table->timestamps();

        //     'member',
        // 'student',
        // 'intership',
        // 'socail_impact',
        // 'province',
        // 'project',
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievments');
    }
};
