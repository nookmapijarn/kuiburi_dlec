<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        
        $request->validate([
                'student_id' => ['required', 'string', 'min:10', 'max:10'],
                //'student_id' => ['required', 'string', 'min:10', 'max:10' , 'unique:'.User::class ,'in:'.DB::table('student')->where('STD_CODE', '1215040001'.$request->student_id)->value('ID')],
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'pdpa_check' => 'accepted',
            ], [
                'student_id.min' => 'รหัสต้องมี 10 หลัก',
                'student_id.max' => 'รหัสต้องมี 10 หลัก',
                'student_id.unique' => 'รหัสนี้สมัครไปแล้ว',
                'student_id.in' => 'ไม่มีนักศึกษารหัสนี้',
                'email.email' => 'email ไม่ถูกต้อง',
                'email.max' => 'email ยาวเกินไป',
                'email.unique' => 'email ถูกใช้ไปแล้ว',
                'password.confirmed' => 'Password ไม่ตรงกัน',
                'pdpa_check.accepted' => 'โปรดกดยอมรับ'
            ]);

        
        $user = User::create([
            'student_id' => $request->student_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'pdpa_check' => $request->has('pdpa_check'),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
