<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('AyId')->nullable()
                ->constrained('academic_years')
                ->onDelete('cascade');
            $table->foreignId('GroupId')->nullable()
                ->constrained('groups')
                ->onDelete('cascade');
            $table->foreignId('ClassId')->nullable()
                ->constrained('classes')
                ->onDelete('cascade');
            $table->foreignId('SectionId')->nullable()
                ->constrained('sections')
                ->onDelete('cascade');
            $table->string('SubjectName');
            $table->string('SubjectCode');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
