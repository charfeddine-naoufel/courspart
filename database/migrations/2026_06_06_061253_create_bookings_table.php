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
    Schema::create('bookings', function (Blueprint $table) {

        $table->id();

        $table->foreignId('student_id')
            ->constrained('users')
            ->cascadeOnDelete();

        $table->foreignId('teacher_id')
            ->constrained('users')
            ->cascadeOnDelete();

        $table->foreignId('subject_id')
            ->constrained()
            ->cascadeOnDelete();

        $table->date('course_date');

        $table->time('course_time');

        $table->integer('duration')
            ->default(60);

        $table->decimal('price',8,2)
            ->default(0);

        $table->enum('status',[
            'pending',
            'accepted',
            'completed',
            'cancelled'
        ])->default('pending');

        $table->text('notes')
            ->nullable();
        $table->string('meeting_link')->nullable();

        $table->string('meeting_provider')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
