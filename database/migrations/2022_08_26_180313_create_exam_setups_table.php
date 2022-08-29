<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_setups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('AyId')->nullable()
                  ->constrained('academic_years')
                  ->onDelete('cascade');
            $table->foreignId('ExampNameId')->nullable()
                  ->constrained('exam_names')
                  ->onDelete('cascade');
           $table->foreignId('ClassId')->nullable()
                  ->constrained('classes')
                  ->onDelete('cascade');
          $table->foreignId('SectionId')->nullable()
                  ->constrained('sections')
                  ->onDelete('cascade');
           $table->foreignId('SubjectId')->nullable()
                  ->constrained('subjects')
                  ->onDelete('cascade');
           $table->foreignId('GroupId')->nullable()
                  ->constrained('groups')
                  ->onDelete('cascade');
            $table->string('subjective');
            $table->string('objective');
            $table->string('Practical')->nullable();
            $table->string('WeightedMarks')->nullable();
            $table->string('CreatedDate')->nullable();
            $table->string('status',1)->nullable()->default(0);
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
        Schema::dropIfExists('exam_setups');
    }
}
