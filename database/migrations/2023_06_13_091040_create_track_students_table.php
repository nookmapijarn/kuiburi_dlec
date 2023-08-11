<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('track_students', function (Blueprint $table) {
            $table->id();
            $table->binary('IMG_1')->nullable(); //for blob
            $table->binary('IMG_2')->nullable(); //for blob
            $table->char('STD_CODE', 10)->nullable();
            $table->char('PRENAME', 8)->nullable();
            $table->string('NAME', 100)->nullable();
            $table->string('SURNAME', 100)->nullable();
            $table->string('FIN_GRADE', 25)->nullable();
            $table->char('FIN_SEM', 8)->nullable();
            $table->char('GRP_CODE', 8)->nullable();
            $table->char('GENDER', 8)->nullable();
            $table->char('AGE', 2)->nullable();
            $table->char('PHONE', 12)->nullable();
            $table->string('SOCIAL', 100)->nullable();
            $table->string('LV_UP', 25)->nullable(); //ศึกษาต่อระบดับสูงขึ้น
            $table->string('LV_CONT', 25)->nullable(); // ที่อยู่ศึกษาต่อ
            $table->string('CAREER', 25)->nullable(); // ประกอบอาชีพ
            $table->string('CAREER_CONT', 25)->nullable(); // ที่อยู่ประกอบอาชีพ
            $table->string('SALA_UP', 25)->nullable(); //เงินเดือนสูงขึ้น
            $table->string('SALA_CONT', 25)->nullable(); // ที่อยู่สถานประกอบการ
            $table->char('BENEFIT_1', 2)->nullable();
            $table->char('BENEFIT_2', 2)->nullable();
            $table->string('ABI', 50)->nullable();
            $table->string('WORK_WANT', 50)->nullable();
            $table->string('ABI_WANT', 50)->nullable();
            $table->string('IDEA', 50)->nullable();
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
        Schema::dropIfExists('track_students');
    }
};
