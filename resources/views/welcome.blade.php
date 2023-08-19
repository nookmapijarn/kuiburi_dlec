<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="2pi9TzWSjw9fEzla9XMTbb3-lTnVb26X8BK6X8sbx0A"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="ทะเบียนนักศึกษา - สกร.อำเภอกุยบุรี, การเรียนการสอน, ตารางสอบ สกร.อำเภอกุยบุรี, นักศึกษา สกร.อำเภอกุยบุรี, ผลการเรียน สกร.อำเภอกุยบุรี">
        <meta name="robots" content="ทะเบียนนักศึกษา - สกร.อำเภอกุยบุรี, การเรียนการสอน, ตารางสอบ สกร.อำเภอกุยบุรี, นักศึกษา สกร.อำเภอกุยบุรี, ผลการเรียน สกร.อำเภอกุยบุรี">
        <title>{{ config('app.name', 'งานการศึกษาพื้นฐาน-สกร.อำเภอกุยบุรี') }}</title>
        <link rel="icon" type="image/x-icon" href="{{asset('storage/logo.png');}}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        {{-- google font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@500&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="">
        @if(request()->get('roletype')!='')
        <!-- Modal container -->
        <!-- Trigger button -->
        <button id="modal-open-button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded hidden">
            Open Modal
        </button>
        <!-- Modal container -->
        <div id="modal-container" class="fixed inset-0 flex items-center justify-center z-50">
            <!-- Modal content -->
            <div class="bg-yellow-200 rounded-lg p-6">
            <!-- Modal header -->
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-bold">คุณไม่สามารถเข้าถึงหน้านี้ได้</h2>
                <button id="modal-close-button" class="text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="ml-3 text-sm font-normal"> 
                คุณคือผู้ใช้ : 
                {{$role = request()->roletype}}
                : จะไม่มีสิทธิเข้าถึงระบบหรือหน้าที่ไม่ได้รับอนุญาติ "กรุณาเลือกระบบให้ตรงกับบทบาทหน้าที่ของคุณ" <br>
                <div class="grid grid-rows-3 grid-flow-col gap-4 p-5" role="group">

                    <a href="{{ url('/ประวัติการเรียน') }}" class="inline-flex items-center justify-center p-5 text-base font-medium text-white rounded-lg bg-violet-600 hover:text-gray-900 hover:bg-gray-100 ">
                        <span class="w-full">1 : สำหรับนักศึกษา</span>
                        <svg aria-hidden="true" class="w-6 h-6 ml-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a> 
                    <a href="{{ url('/teachers') }}" class="inline-flex items-center justify-center p-5 text-base font-medium text-white rounded-lg bg-violet-600 hover:text-gray-900 hover:bg-gray-100 ">
                        <span class="w-full">2 : สำหรับ ครู/ผู้สอน</span>
                        <svg aria-hidden="true" class="w-6 h-6 ml-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a> 
                    <a href="{{ url('/boss') }}" class="inline-flex items-center justify-center p-5 text-base font-medium text-white rounded-lg bg-violet-600 hover:text-gray-900 hover:bg-gray-100 ">
                        <span class="w-full">3 : สำหรับ ผู้บริหาร</span>
                        <svg aria-hidden="true" class="w-6 h-6 ml-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a> 
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();" class="text-red-600">
                        {{ __('ออกจากระบบ') }}
                    </x-nav-link>
                </form>
            </div>
            </div>
        </div>
        @endif

        <section class="pt-15 bg-center bg-no-repeat bg-[url('storage/studentall.jpg')] background-animate bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-700"> 
            <div class="px-4 mx-auto max-w-screen-xl text-center py-12 lg:py-56">
                <div class="flex justify-center mb-3 md:m-5">
                    <img src="{{asset('storage/logo.png');}}" width="120px" class="drop-shadow-2xl">
                </div>
                <h1 class="md:mb-4 text-xl font-extrabold tracking-tight leading-none text-white md:text-4xl lg:text-5xl tracking-wider leading-relaxed drop-shadow-2xl">ศูนย์ส่งเสริมการเรียนรู้อำเภอกุยบุรี</h1>
                <p class="mb-8 text-sm font-normal text-gray-300 md:text-xl sm:px-16 lg:px-48 drop-shadow-2xl">Kuiburi District Learning Encouragement Center</p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                    <a href="{{ route('login') }}" class="w-full sm:w-auto bg-yellow-300 text-gray-800 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg inline-flex items-center justify-center px-4 py-2.5  ">
                        <svg class="mr-3 w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                        <div class="text-left">
                            <div class="mb-1 text-xs">เข้าสู่ระบบ</div>
                            <div class="-mt-1 font-sans text-sm font-semibold">นักศึกษา</div>
                        </div>
                    </a>
                    <a href="{{ url('teachers') }}" class="w-full sm:w-auto bg-yellow-300 text-gray-800 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg inline-flex items-center justify-center px-4 py-2.5">
                        <svg class="mr-3 w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg> 
                        <div class="text-left">
                            <div class="mb-1 text-xs">เข้าสู่ระบบ</div>
                            <div class="-mt-1 font-sans text-sm font-semibold">ครูผู้สอน</div>
                        </div>
                    </a>
                    <a href="{{ route('boss') }}" class=" w-full sm:w-auto bg-yellow-300 text-gray-800 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg inline-flex items-center justify-center px-4 py-2.5">
                        <svg class="mr-3 w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                        </svg>  
                        <div class="text-left">
                            <div class="mb-1 text-xs">เข้าสู่ระบบ</div>
                            <div class="-mt-1 font-sans text-sm font-semibold">ผู้บริหาร</div>
                        </div>
                    </a>
                    <a href="{{ url('help') }}" class=" w-full sm:w-auto bg-yellow-300 text-gray-800 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg inline-flex items-center justify-center px-4 py-2.5">
                        <svg class="mr-3 w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                        </svg> 
                        <div class="text-left">
                            <div class="mb-1 text-xs">สอบถาม</div>
                            <div class="-mt-1 font-sans text-sm font-semibold">ช่วยเหลือ</div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="hidden sm:block">
            <div class="flex justify-center p-10">
                <div class="text-center text-sm text-gray-100 sm:text-center sm:ml-0">
                    @include('aboutsystem')
                </div>
            </div>
        </section>

        <section class="bg-gray-100 dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
                {{-- <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">หลักสูตรการศึกษานอกระบบระดับการศึกษาขั้นพื้นฐาน พุทธศักราช 2551</h1> --}}
                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400"> "คิดเป็น" เชื่อว่ามนุษย์ทุกคนมีพื้นฐานชีวิตแตกต่างกันมีวิถีการดำเนินชีวิตที่แตกต่างกันมีความ ต้องการที่แตกต่างกัน  แต่ทุกคนล้วนมีความต้องการที่จะมีความสุขอย่างอัตภาพเหมือนกัน.</p>
            </div>
        </section>
        
    </body>
    @include('layouts.footer')
</html>
<script>
    // Open the modal when the button is clicked
    document.getElementById('modal-open-button').addEventListener('click', function() {
    document.getElementById('modal-container').classList.remove('hidden');
    });

    // Close the modal when the close button is clicked
    document.getElementById('modal-close-button').addEventListener('click', function() {
    document.getElementById('modal-container').classList.add('hidden');
    });
</script>