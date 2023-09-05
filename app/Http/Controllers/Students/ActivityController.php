<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index(){
        $id = auth()->user()->student_id;
        $activity = $this->get_activity($id);
        //print_r($notlearned);
        return view('students.activity' ,compact('activity'));
    }
    public function get_activity($id){
        $activity = DB::table('activity')
        ->where('STD_CODE', '1277020000'.$id)
        ->orderBy('SEMESTRY', 'ASC')
        ->get();
        //print_r($activity[1]);     
        return $activity;
    }
}
