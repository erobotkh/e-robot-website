<?php

use App\Models\Comment;
use App\Models\PostContent;
use App\Models\User;
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
        Schema::create('sub_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->onDelete('cascade')->onUpdate('cascade');;
            $table->foreignIdFor(PostContent::class)->constrained()->onDelete('cascade')->onUpdate('cascade');;
            $table->text('sub_comment_text');
            $table->foreignIdFor(Comment::class)->constrained()->onDelete('cascade')->onUpdate('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_comments');
    }
};
