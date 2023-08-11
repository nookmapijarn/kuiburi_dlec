<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackStudent extends Model
{
    use HasFactory;
    protected $fillable = [
        'IMG_1',
        'IMG_2',
        'STD_CODE',
        'PRENAME',
        'NAME',
        'SURNAME',
        'FIN_GRADE',
        'FIN_SEM',
        'GRP_CODE', 
        'GENDER', 
        'AGE', 
        'PHONE', 
        'SOCIAL', 
        'LV_UP',  //ศึกษาต่อระบดับสูงขึ้น
        'LV_CONT',  // ที่อยู่ศึกษาต่อ
        'CAREER', // ประกอบอาชีพ
        'CAREER_CONT',  // ที่อยู่ประกอบอาชีพ
        'SALA_UP', //เงินเดือนสูงขึ้น
        'SALA_CONT',// ที่อยู่สถานประกอบการ
        'BENEFIT_1',
        'BENEFIT_2',
        'ABI',
        'WORK_WANT',
        'ABI_WANT',
        'IDEA'
    ];
}
