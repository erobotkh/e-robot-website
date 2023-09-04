<?php

use App\Models\Member;
use App\Models\MemberPosition;
use App\Models\Position;
use App\Models\SocailLink;
use App\Models\Team;
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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('bio')->nullable();
            $table->string('profile');
            $table->foreignIdFor(Team::class)->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(MemberPosition::class)->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
