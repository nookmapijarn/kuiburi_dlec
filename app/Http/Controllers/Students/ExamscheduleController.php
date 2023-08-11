<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamscheduleController extends Controller
{
    //
    public function index()
    {
        $id = auth()->user()->student_id;
        $grade = $this->get_gradelist($id, '66/1');
        $schedule = [];
        $student = $this->get_student($id);
        $nnet = $this->nnet_check($id);

        foreach ($grade as $g) {
            $exam_day = 0;
            $exam_start = 0;
            $exam_end = 0;
            if($this->get_schedule($g->SUB_CODE, $g->SEMESTRY)!=null){
                $exam_day = $this->get_schedule($g->SUB_CODE, $g->SEMESTRY)[0]->EXAM_DAY;
                $exam_start = $this->get_schedule($g->SUB_CODE, $g->SEMESTRY)[0]->EXAM_START;
                $exam_end = $this->get_schedule($g->SUB_CODE, $g->SEMESTRY)[0]->EXAM_END;
            }

            array_push($schedule, 
                            [
                                'sub_code' => $g->SUB_CODE, 
                                'sub_name' => $this->get_subject($g->SUB_CODE)->SUB_NAME,
                                'exam_day' => $exam_day,
                                'exam_start' => $this->timeFormatSch($exam_start),
                                'exam_end'  => $this->timeFormatSch($exam_end),
                                'exam_room'  => $g->ROOMNO
                            ]
                        );
        }

        $key_values = array_column($schedule, 'exam_day'); 
        array_multisort($key_values, SORT_ASC, $schedule);
        $key_values2 = array_column($schedule, 'exam_start'); 
        array_multisort($key_values2, SORT_ASC, $schedule);
        // print $schedule[0]['sub_code'];
        // print_r($schedule);
        return view('students.examschedule', compact('schedule', 'nnet', 'student'));
    }

    public function nnet_check($id){
        if($this->expfin($id)){
            $student = $this->get_student($id);
            foreach ($student as $s) {
                $nnet = ($s->NT_SEM!='' ? 'ผ่านแล้ว' : ($s->NT_NOSEM!='' ? 'E-Exam': 'N-NET'));
            }
            return $nnet;
        }else{
            return null;        
        }
    }

    // ตารางคาดว่าจะจบ
    public function expfin($student_id){
        $expfin = DB::table('expectfin')->where('ID', $student_id)->first();
        if($expfin === null){
            return false;
        } else {
            return true;
        }       
    }

    public function get_student($id){
        $student = DB::table('student')
        ->where('STD_CODE', '1215040001'.$id)
        ->get();
        return $student;
    }

    public function get_gradelist($id, $sumestry){
        // ตาราง garde
        $gradelist = DB::table('grade')
        ->where('STD_CODE', '1215040001'.$id)
        ->where('SEMESTRY', $sumestry)
        ->get();
        return $gradelist;
    }

    public function get_schedule($sub_code, $sumestry){
        $schedule = DB::table('schedule')
        ->where('SUB_CODE', $sub_code)
        ->where('SEMESTRY', $sumestry) //'65/2'
        ->orderBy('EXAM_START', 'ASC')
        ->orderBy('EXAM_DAY', 'ASC')
        ->get();
        //echo $schedule[0]->EXAM_DAY;
        if($schedule->count()){
            return $schedule;
        }else{
            return null;
        }
        
    }
    public function get_subject($sub_code){
        $subject = DB::table('subject')
        ->where('SUB_CODE', $sub_code)
        ->get();
        return $subject[0]; //ข้อมูลตารางรายวิชา
        //print_r($subject);
        //echo $subject[0]->SUB_NAME;
    }

    public function timeFormatSch($time){
        if(strlen($time)>3){
            $time = substr_replace($time, '.', 2, -3); //16.30
        } else {
            $time = substr_replace($time, '.', 1, -3); //8.30
        }
        return $time;
    }
}
