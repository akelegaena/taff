<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('movements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('article_id')->constrained()->cascadeOnDelete();
            $table->enum('type', ['in', 'out']);
            $table->integer('quantity');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->text('note')->nullable();
            $table->timestamp('occurred_at')->useCurrent();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('movements');
    }
};
