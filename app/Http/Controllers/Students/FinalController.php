<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Http\Request;

class FinalController extends Controller
{
    //
    public function Index(){
        return view('students.final');
    }
    
}
