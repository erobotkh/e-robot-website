<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Lesson;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lesson_details', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('header');
            $table->string('image_type')->nullable();
            $table->string('image')->nullable();
            $table->longText('body')->nullable();
            $table->longText('sub_body')->nullable();
            $table->longText('conclusion')->nullable();
            $table->foreignIdFor(Lesson::class)->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson_details');
    }
};
