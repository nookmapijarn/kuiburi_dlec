<x-guest-layout>

    {{-- Label --}}
    <div class="text-center m-2 rounded-lg text-lg text-shadow">ระบบงานทะเบียน-งานการศึกษาขั้นพื้นฐาน</div>
    <div class="text-center m-2 rounded-lg text-lg text-shadow">ศูนย์ส่งเสริมการเรียนรู้อำเภอโพธิ์ทอง</div>
    <div class="text-center p-1 m-1 text-2xl text-gray-900 ">Phothong DLEC</div>
 


    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="student_id" :value="__('Username | รหัสนักศึกษา')" />
            <x-text-input id="student_id" class="block mt-1 w-full text-center" 
                type="Number" name="student_id" :value="old('student_id')" 
                required 
                autofocus 
                autocomplete="student_id" />
            <x-input-error :messages="$errors->get('student_id')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full text-center"
                            type="password"
                            name="password"
                            required autocomplete="current-password"
                            />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        {{-- <button class="rounded-full ... bg-emerald-500"> 
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('register') }}">
                {{ __('สมัครสมาชิก') }}
            </a>
        </button> --}}

        <div class="flex items-center justify-center mt-4">
            {{-- @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif --}}
            {{-- <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                {{ __('เข้าสู่ระบบ') }}
                <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button> --}}
            <button class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center">
                {{ __('เข้าสู่ระบบ') }}
                <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>

        <!-- Register -->
        <div class="flex items-center justify-end ">
            <a class="mt-4 m-2 hover:text-sky-700" href="{{ route('register') }}">
                <div class="rounded-full">
                    {{ __('สมัครสมาชิก') }}
                </div>   
            </a>   
            <a class="flex items-center justify-end mt-4 m-2 hover:text-sky-700" href="{{ url('welcome') }}">
                <div class="rounded-full">
                    {{ __('หน้าหลัก') }}
                </div>   
            </a>   
        </div>
        

    </form>
</x-guest-layout>
