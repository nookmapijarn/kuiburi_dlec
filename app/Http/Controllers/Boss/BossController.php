<?php

namespace App\Http\Controllers\Boss;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Auth;


class BossController extends Controller
{
    //
    protected $semestry = '66/1';

    public function index(Request $request)
    {
        $id = auth()->user()->student_id;
        if ($id != '1215040000') {
            return redirect('welcome/?roletype='.$id);
        }

        // SEMESTRY Labels
       $agent = new Agent();
       if( $agent->isMobile()){
        $labels = $this->get_semestry(6);
       }else{
        $labels = $this->get_semestry(6);
       }   
        
        $data_student = [];
        $data_new_student = [];
        $data_new_student_rollback = [];
        $data_finish_student = [];
        $data_studentPrimary = [];
        $data_studentJunior  = [];
        $data_studentSenior  = [];
        $data_exam_avg = [];
        $data_exam_avg_tumbon = [];
        $data_exam_avg_pangpub = [];
        $data_exam_avg_angkaew = [];
        $data_exam_avg_nongmeakai = [];
        $data_exam_avg_yangchay = [];
        $data_exam_avg_phorangnok = [];
        $data_exam_avg_rammasak = [];
        $data_exam_avg_bangrakum = [];
        $data_exam_avg_borei = [];
        $data_exam_avg_samngam = [];
        $data_exam_avg_thangpha = [];
        $data_exam_avg_inthapamoon = [];
        $data_exam_avg_aogkaruk = [];
        $data_exam_avg_kokpudsar = [];
        $data_exam_avg_bangjoacha = [];
        $data_exam_avg_kumyard = [];
        $data_exam_avg_pikan = [];
        $group = $this->get_group($this->semestry);

        // echo $this->finish_student('65/2')->Count()."SEMMMMMMM";

        $index = 0;
        foreach($labels as $key=>$val) {
            // Use $key as an index, or...
            $allstudent = $this->current_student($val)->Count();
            $studentPrimary = $this->student_primary($val, '1')->Count();
            $studentJunior = $this->student_primary($val, '2')->Count();
            $studentSenior = $this->student_primary($val, '3')->Count();
            $new_student = $this->new_student($val)->Count();
            $new_student_rollback = $this->new_student_rollback($val)->Count();
            $finish_student = $this->finish_student($val)->Count();
            $exam_avg = $this->exam_avg($val)['result'];
            $exam_avg_pangpub = $this->exam_avg($val, '4011')['result'];
            $exam_avg_angkaew = $this->exam_avg($val, '4021')['result'];
            $exam_avg_nongmeakai = $this->exam_avg($val, '4031')['result'];
            $exam_avg_yangchay = $this->exam_avg($val, '4041')['result'];
            $exam_avg_phorangnok = $this->exam_avg($val, '4051')['result'];
            $exam_avg_rammasak = $this->exam_avg($val, '4061')['result'];
            $exam_avg_bangrakum = $this->exam_avg($val, '4071')['result'];
            $exam_avg_borei = $this->exam_avg($val, '4081')['result'];
            $exam_avg_samngam = $this->exam_avg($val, '4091')['result'];
            $exam_avg_thangpha = $this->exam_avg($val, '4101')['result'];
            $exam_avg_inthapamoon = $this->exam_avg($val, '4111')['result'];
            $exam_avg_aogkaruk = $this->exam_avg($val, '4121')['result'];
            $exam_avg_kokpudsar = $this->exam_avg($val, '4131')['result'];
            $exam_avg_bangjoacha = $this->exam_avg($val, '4141')['result'];
            $exam_avg_kumyard = $this->exam_avg($val, '4151')['result'];
            $exam_avg_pikan = $this->exam_avg($val, '4171')['result'];


            array_push($data_student, $allstudent);
            array_push($data_studentPrimary, $studentPrimary);
            array_push($data_studentJunior, $studentJunior);
            array_push($data_studentSenior, $studentSenior);
            array_push($data_new_student, $new_student);
            array_push($data_new_student_rollback, $new_student_rollback);
            array_push($data_finish_student, $finish_student);
            array_push($data_exam_avg, $exam_avg);
            array_push($data_exam_avg_pangpub, $exam_avg_pangpub);
            array_push($data_exam_avg_angkaew, $exam_avg_angkaew);
            array_push($data_exam_avg_nongmeakai, $exam_avg_nongmeakai);
            array_push($data_exam_avg_yangchay, $exam_avg_yangchay);
            array_push($data_exam_avg_phorangnok, $exam_avg_phorangnok);
            array_push($data_exam_avg_rammasak, $exam_avg_rammasak);
            array_push($data_exam_avg_bangrakum, $exam_avg_bangrakum);
            array_push($data_exam_avg_borei, $exam_avg_borei);
            array_push($data_exam_avg_samngam, $exam_avg_samngam);
            array_push($data_exam_avg_thangpha, $exam_avg_thangpha);
            array_push($data_exam_avg_inthapamoon, $exam_avg_inthapamoon);
            array_push($data_exam_avg_aogkaruk, $exam_avg_aogkaruk);
            array_push($data_exam_avg_kokpudsar, $exam_avg_kokpudsar);
            array_push($data_exam_avg_bangjoacha, $exam_avg_bangjoacha);
            array_push($data_exam_avg_kumyard, $exam_avg_kumyard);
            array_push($data_exam_avg_pikan, $exam_avg_pikan);
            // ... manage the index this way..
            //echo "Index is $index\n ".' Value ='.$val;
            $index++;
        }

        // Boss
        $semestry = $this->semestry;
        $allstudent = $this->current_student($this->semestry)->Count();

        $exam_avg = $this->exam_avg('65/2')['result'];
        $exam_avg_semestry = $this->exam_avg('65/2')['semestry'];

        $new_student = $this->new_student($semestry)->Count();
        $expectfin_student = $this->expectfin_student()->Count();
        $nofinish_student = $this->nofinish_student()->Count();
        
        return view('boss.bdashboard',compact('allstudent', 
                                                'exam_avg',   
                                                'semestry', 
                                                'exam_avg_semestry', 
                                                'new_student',
                                                'expectfin_student',
                                                'nofinish_student',
                                                'labels', 
                                                'data_student',
                                                'data_studentPrimary',
                                                'data_studentJunior',
                                                'data_studentSenior',
                                                'data_new_student',
                                                'data_new_student_rollback',
                                                'data_finish_student',
                                                'data_exam_avg',
                                                'data_exam_avg_pangpub',
                                                'data_exam_avg_angkaew',
                                                'data_exam_avg_nongmeakai',
                                                'data_exam_avg_yangchay',
                                                'data_exam_avg_phorangnok',
                                                'data_exam_avg_rammasak',
                                                'data_exam_avg_bangrakum',
                                                'data_exam_avg_borei',
                                                'data_exam_avg_samngam',
                                                'data_exam_avg_thangpha',
                                                'data_exam_avg_inthapamoon',
                                                'data_exam_avg_aogkaruk',
                                                'data_exam_avg_kokpudsar',
                                                'data_exam_avg_bangjoacha',
                                                'data_exam_avg_kumyard',
                                                'data_exam_avg_pikan'
                                            ));
    }

    public function checkRole()
    {
        dd('checkRole');
    }

    public function current_student($semestry=''){
        $g = DB::table('grade')
        ->where('SEMESTRY', $semestry)
        ->select('STD_CODE')
        ->orderBy('STD_CODE', 'ASC')
        ->groupBy('STD_CODE')
        ->get();
        return $g;
    }

    public function get_semestry($limit){
        $sem = DB::table('grade')
        ->select('SEMESTRY')
        ->orderBy('SEMESTRY', 'DESC')
        ->groupBy('SEMESTRY')
        ->take($limit)
        ->get();

        $isem = [];

        foreach($sem as $s){
            array_push($isem, $s->SEMESTRY);
        }
        return  array_reverse($isem);
    }

    public function get_group($semestry){
        $grp = DB::table('grade')  
        ->select('GRP_CODE')
        ->where('SEMESTRY', $semestry)
        ->groupBy('GRP_CODE')
        ->get();
        return  $grp;
    }

    public function student_primary($semestry, $tlavel){
        //$ID = str_replace('/','',$semestry);
        $s = DB::table('grade'.$tlavel)
        ->where('SEMESTRY', $semestry)
        ->select('STD_CODE')
        ->groupBy('STD_CODE')
        //->where('STD_CODE', 'regexp', '1215040001'.$ID.'[0-9]+')
        //->where('ID', '>', $ID)
        ->get();
        return $s;
    }
    public function new_student($semestry){
        $ID = str_replace('/','',$semestry); //661
        $s = DB::table('student')
        ->where('ID', 'regexp', $ID.'[0-9]')
        ->select('ID')
        ->orderBy('ID', 'ASC')
        ->groupBy('ID')
        ->get();
        return $s;
    }

    public function new_student_rollback($semestry){
        $ID = str_replace('/','',$semestry); //661
        $ID = str_split($ID, 2);
        $year = $ID[0]-2;
        $rollback_ID = $year.$ID[1];

        //echo $newid;

        $s = DB::table('student')
        ->where('ID', 'regexp', $rollback_ID.'[0-9]')
        ->select('ID')
        ->orderBy('ID', 'ASC')
        ->groupBy('ID')
        ->get();
        return $s;
    }

    public function finish_student($semestry){
        $s = DB::table('student')
        ->where('FIN_CAUSE', '=', 1)
        ->where('FIN_SEM', 'regexp', $semestry)
        ->select('STD_CODE')
        ->orderBy('STD_CODE', 'ASC')
        ->groupBy('STD_CODE')
        ->get();
        //echo $s;
        return $s;
    }

    public function expectfin_student(){
        $expectfin = DB::table('expectfin')
        ->select('ID')
        ->orderBy('ID', 'ASC')
        ->groupBy('ID')
        ->get();
        return $expectfin;
    }

    public function nofinish_student(){
        $nofinish_student = DB::table('expectfin1')
        ->select('ID')
        ->orderBy('ID', 'ASC')
        ->groupBy('ID')
        ->get();
        return $nofinish_student;
    }
    public function exam_avg($semestry, $tumbon=''){
        if($tumbon!=''){
            $exam_grade = DB::table('grade')
            ->where('SEMESTRY', $semestry)
            ->where('GRP_CODE', $tumbon)
            ->where('GRADE', '!=', 'ข')
            ->where('GRADE', '!=', '')
            ->select('STD_CODE')
            ->groupBy('STD_CODE')
            ->get();

            $all_grade = DB::table('grade')
            ->where('SEMESTRY', $semestry)
            ->where('GRP_CODE', $tumbon)
            ->select('STD_CODE')
            ->groupBy('STD_CODE')  
            ->get();
        } else {
            $exam_grade = DB::table('grade')
            ->where('SEMESTRY', $semestry)
            ->where('GRADE', '!=', 'ข')
            ->where('GRADE', '!=', '')
            ->select('STD_CODE')
            ->groupBy('STD_CODE')
            ->get();

            $all_grade = DB::table('grade')
            ->where('SEMESTRY', $semestry)
            ->select('STD_CODE')
            ->groupBy('STD_CODE')  
            ->get();
        }

        // echo 'All ->'.$all_grade->Count().'<br>';
        // echo 'g ->'.$exam_grade->Count().'<br>';
        if($exam_grade->Count()!=0){
            $result = ($exam_grade->Count()*100)/$all_grade->Count();
            return [
                'result'   => round($result, 2), 
                'semestry' => $semestry
            ];
        }else{
            //echo $exam_grade;
            return [
                'result'   => 0, 
                'semestry' => $semestry
            ];
        }
         
    }
}
