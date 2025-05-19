<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('video_url')->nullable();
            $table->text('content')->nullable();
            $table->integer('order_number')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('lessons');
    }
};
