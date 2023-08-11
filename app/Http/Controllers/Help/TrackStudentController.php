<?php
namespace App\Http\Controllers\Help;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrackStudent;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;



class TrackStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // $request->validate([
        //     'STD_CODE' => ['required', 'string', 'min:10', 'max:10'],
        //     'NAME' => ['required', 'string', 'max:255'],
        // ], [
        //     'STD_CODE.min' => 'รหัสต้องมี 10 หลัก',
        //     'STD_CODE.max' => 'รหัสต้องมี 10 หลัก',
        // ]);
        return view('help.trackstudent');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        echo 'create'.'<br><br><br><br><br><br>';

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //        
        $TrackStudent = TrackStudent::create([
            'IMG_1' => $this->upload($request),
            'IMG_2'=> $this->upload($request),
            'STD_CODE ' => $request->STD_CODE,
            'PRENAME' => $request->PRENAME,
            'NAME' => $request->NAME,
            'SURNAME' => $request->SURNAME,
            'FIN_GRADE' => $request->FIN_GRADE,
            'FIN_SEM' => $request->FIN_SEM,
            'GRP_CODE' => $request->GRP_CODE, 
            'GENDER' => $request->GENDER, 
            'AGE' => $request->AGE, 
            'PHONE' => $request->PHONE, 
            'SOCIAL' => $request->SOCIAL, 
            'LV_UP' => $request->LV_UP,  //ศึกษาต่อระบดับสูงขึ้น
            'LV_CONT' => $request->LV_CONT,  // ที่อยู่ศึกษาต่อ
            'CAREER' => $request->CAREER, // ประกอบอาชีพ
            'CAREER_CONT' => $request->CAREER_CONT,  // ที่อยู่ประกอบอาชีพ
            'SALA_UP' => $request->SALA_UP, //เงินเดือนสูงขึ้น
            'SALA_CONT' => $request->SALA_CONT,// ที่อยู่สถานประกอบการ
            'BENEFIT_1' => $request->BENEFIT_1,
            'BENEFIT_2' => $request->BENEFIT_2,
            'ABI' => $request->ABI,
            'WORK_WANT' => $request->WORK_WANT,
            'ABI_WANT' => $request->ABI_WANT,
            'IDEA' => $request->IDEA
        ]);
        // echo $TrackStudent.'store'.'<br><br><br><br><br><br>';
        return view('help.trackstudentsuccess');
    }

    public function upload(Request $request)
    {

        // $path = $request->file('IMG_1')->storeAs(
        //     'images', $request->STD_CODE
        // );
        //$path = $request->IMG_1->store('public/images');

        if ($request->hasFile('IMG_1') && $request->file('IMG_1')->isValid()) {
            // File exists and is valid
            $image = $request->file('IMG_1');
        
            // Generate a unique name for the uploaded image
            $imageName = $request->STD_CODE.'_'.time().'.png';
            
            // Store the image with the custom name
            $path = $image->storeAs('public/images/graduated', $imageName);
            
            // Get the public URL for the stored image
            $imageUrl = Storage::url($path);

            //echo $imageUrl;
            
            // Return the image URL or store it in the database if needed
            return $imageUrl;

            // Rest of the code
        } else {
            // Handle error when file is missing or invalid
            //echo 'ERR UPLOAD';
            return '';
        }
        
    
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
