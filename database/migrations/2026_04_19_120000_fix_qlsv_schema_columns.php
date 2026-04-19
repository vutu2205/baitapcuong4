<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            if (! Schema::hasColumn('students', 'name')) {
                $table->string('name')->after('id');
            }
            if (! Schema::hasColumn('students', 'class_id')) {
                $table->foreignId('class_id')->after('name')->constrained('class_rooms')->cascadeOnDelete();
            }
        });

        Schema::table('subjects', function (Blueprint $table) {
            if (! Schema::hasColumn('subjects', 'name')) {
                $table->string('name')->after('id');
            }
            if (! Schema::hasColumn('subjects', 'credits')) {
                $table->unsignedTinyInteger('credits')->default(3)->after('name');
            }
            if (! Schema::hasColumn('subjects', 'subject_code')) {
                $table->string('subject_code')->nullable()->after('credits');
            }
        });

        Schema::table('student_subject', function (Blueprint $table) {
            if (Schema::hasColumn('student_subject', 'name')) {
                $table->dropColumn('name');
            }
            if (! Schema::hasColumn('student_subject', 'student_id')) {
                $table->foreignId('student_id')->after('id')->constrained('students')->cascadeOnDelete();
            }
            if (! Schema::hasColumn('student_subject', 'subject_id')) {
                $table->foreignId('subject_id')->after('student_id')->constrained('subjects')->cascadeOnDelete();
            }
        });
    }

    public function down(): void
    {
        Schema::table('student_subject', function (Blueprint $table) {
            if (Schema::hasColumn('student_subject', 'subject_id')) {
                $table->dropConstrainedForeignId('subject_id');
            }
            if (Schema::hasColumn('student_subject', 'student_id')) {
                $table->dropConstrainedForeignId('student_id');
            }
        });

        Schema::table('subjects', function (Blueprint $table) {
            foreach (['subject_code', 'credits', 'name'] as $col) {
                if (Schema::hasColumn('subjects', $col)) {
                    $table->dropColumn($col);
                }
            }
        });

        Schema::table('students', function (Blueprint $table) {
            if (Schema::hasColumn('students', 'class_id')) {
                $table->dropConstrainedForeignId('class_id');
            }
            if (Schema::hasColumn('students', 'name')) {
                $table->dropColumn('name');
            }
        });
    }
};
