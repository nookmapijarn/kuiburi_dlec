<x-app-layout>
    <x-slot name="header">
        <h6 class="font-semibold text-md text-gray-800 dark:text-gray-200 leading-tight pl-4">
            {{ __('ประวัติการเรียน') }}
        </h6>
    </x-slot>

    {{-- Avatar --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="flex items-center space-x-4 gap- items-center py-1 px-4 mx-auto max-w-screen-md">
            <img class="w-10 h-10 rounded-full" src="data:image/png;base64,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" alt="">
            <div class="font-medium dark:text-white">
                <div> รหัสนักศึกษา: {{ auth()->user()->student_id }} </div>
                <div class="text-sm text-gray-500 dark:text-gray-400">ชื่อ-สกุล {{$student[0]->NAME}} {{$student[0]->SURNAME}}</div>
            </div>
        </div>
    </section>

    {{-- Progess --}}
    <section class="bg-white grid justify-items-center">
        <div class="max-w-screen-md p-2 w-full pt-10 pb-10">
            <div class="grid grid-cols-1 gap-20 md:grid-cols-2 md:gap-10">
              <div class="flex items-center flex-wrap px-10 bg-white shadow-xl rounded-2xl h-20"
                 x-data="{ circumference: 50 * 2 * Math.PI, percent: {{$credit_percent}} }"
                 >
                    <div class="flex items-center justify-center -m-6 overflow-hidden bg-white rounded-full">
                      <svg class="w-32 h-32 transform translate-x-1 translate-y-1" x-cloak aria-hidden="true">
                        <circle
                          class="text-gray-300"
                          stroke-width="10"
                          stroke="currentColor"
                          fill="transparent"
                          r="50"
                          cx="60"
                          cy="60"
                          />
                        <circle
                          class="text-blue-600"
                          stroke-width="10"
                          :stroke-dasharray="circumference"
                          :stroke-dashoffset="circumference - percent / 100 * circumference"
                          stroke-linecap="round"
                          stroke="currentColor"
                          fill="transparent"
                          r="50"
                          cx="60"
                          cy="60"
                         />
                      </svg>
                      <span class="absolute text-2xl text-blue-700" x-text="`${percent}%`"></span>
                    </div>
                    <p class="ml-10 font-medium text-gray-600 sm:text-sm">หน่วยกิต</p>
          
                    <span class="ml-auto text-sm font-medium text-blue-600"> {{$credit}}/{{$allcredit}}</span>
                </div>
              
              
              <div class="flex items-center flex-wrap px-10 bg-white shadow-xl rounded-2xl h-20"
                 x-data="{ circumference: 50 * 2 * Math.PI, percent: {{($act_sum*100)/200}} }"
                 >
                    <div class="flex items-center justify-center -m-6 overflow-hidden bg-white rounded-full">
                      <svg class="w-32 h-32 transform translate-x-1 translate-y-1" x-cloak aria-hidden="true">
                        <circle
                          class="text-gray-300"
                          stroke-width="10"
                          stroke="currentColor"
                          fill="transparent"
                          r="50"
                          cx="60"
                          cy="60"
                          />
                        <circle
                          class="text-yellow-400"
                          stroke-width="10"
                          :stroke-dasharray="circumference"
                          :stroke-dashoffset="circumference - percent / 100 * circumference"
                          stroke-linecap="round"
                          stroke="currentColor"
                          fill="transparent"
                          r="50"
                          cx="60"
                          cy="60"
                         />
                      </svg>
                      <span class="absolute text-2xl text-yellow-400" x-text="`${percent}%`"></span>
                    </div>
                    <p class="ml-10 font-medium text-gray-600 sm:text-sm">ชั่วโมง กพช.</p>
          
                    <span class="ml-auto text-sm font-medium text-yellow-400 ">{{$act_sum}}/200</span>
                </div>
            </div>
          </div>
    </section>

    {{-- Process Semestry --}}
    <section class="bg-white grid justify-items-center">
        <div class="w-full p-10 max-w-screen-md">
            <h6 class="text-sm text-center font-medium leading-6 text-gray-900 font-kanit">
                ระยะเวลาเรียน (ไม่เกิน 10 ภาคเรียน)
            </h6>
            <div class="pt-5">
                <div class="bg-gray-200 relative w-[100%] ">
                    <div class="border-r-4 border-red-500 absolute top-0 left-0 h-full w-[100.5%] " >
                        <span class="bg-red-400 absolute -right-9 mt-6 rounded-sm py-1 px-2 text-xs font-semibold text-white">
                            <span class="bg-red-400 absolute top-[-2px] left-1/2 -z-15 h-2 w-2 -translate-x-1/2 rotate-45 rounded-sm">
                            </span>
                             หมดสภาพ
                        </span>
                    </div>
                    <div class="border-r-4 border-yellow-500 absolute top-0 left-0 h-full w-[100%] " >
                        <div class="absolute text-xs font-semibold right-4 mr-2 text-gray-200 text-ellipsis overflow-hidden ...">ล่าช้า 5-10 ภาคเรียน</div>
                        {{-- <span class="bg-yellow-400 absolute right-36 mt-6 rounded-sm py-1 px-2 text-xs font-semibold text-white">
                            <span class="bg-yellow-400 absolute top-[-2px] left-1/2 -z-15 h-2 w-2 -translate-x-1/2 rotate-45 rounded-sm">
                            </span>
                            จบล่าช้า
                        </span> --}}
                    </div>
                    <div class="border-r-4 border-green-500 absolute top-0 left-0 h-full w-[40%] g" >
                        <div class="absolute text-xs font-semibold right-4 mr-2 text-gray-200 text-ellipsis overflow-hidden ..."> 1-4 ภาคเรียน</div>
                        <span class="bg-green-400 absolute -right-7 mt-6 rounded-sm py-1 px-2 text-xs font-semibold text-white">
                            <span class="bg-green-400 absolute top-[-2px] left-1/2 -z-15 h-2 w-2 -translate-x-1/2 rotate-45 rounded-sm">
                            </span>
                            จบปกติ
                        </span>
                    </div>
                    <div x-data="{width: 0}" x-init="$nextTick(() => { width = {{$timelerning}} })" class="bg-gray-300 rounded-lg h-4 my-2" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                        @if($timelerning!=0)
                        <div :style="`width: ${width}%; transition: width 1s;`" class="bg-indigo-500 h-4 relative ">
                            <span class="bg-indigo-500 absolute bottom-full mb-2 rounded-sm py-1 px-2 text-xs font-semibold text-white -right-8 md:-right-8">
                                <span class="bg-indigo-500 absolute bottom-[-2px] left-1/2 -z-15 h-2 w-2 -translate-x-1/2 rotate-45 rounded-sm">
                                </span>
                                ปัจจุบัน {{$timelerning/10}}
                            </span>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>         
    </section>

    {{-- Bar Redar --}}
    <section class="bg-white grid justify-items-center">
        <div class="h-full w-full p-10 bg-white max-w-screen-md  grid justify-items-center">
            <h6 class="text-sm font-medium leading-6 text-gray-900 font-kanit">
                ภาพรวมคะแนนเฉลี่ยทุกรายวิชา 5 กลุ่มสาระ
            </h6>
            <canvas id="myChart" height="100px"></canvas>
        </div> 
    </section>
    {{-- Progess bar --}}
    {{-- <section class="bg-white dark:bg-gray-900">
          <div class="h-full p-4 bg-white-100 mx-auto max-w-screen-md">
              <h6 class="text-sm font-medium leading-6 text-gray-900 font-kanit">
                สถิติการเรียน
              </h6>
              <div class="grid grid-cols-3 gap-4">
                <div class="px-4 py-5 lg:p-6 shadow-md rounded-md bg-opacity-50 bg-green-400">
                    <dl>
                        <dt class="text-sm font-medium leading-5 text-gray-500 truncate">
                        GPA
                        </dt>
                        <dd class="mt-1 text-3xl font-semibold leading-9 text-gray-900">
                            {{$grade_avg}}
                        </dd>
                    </dl>
                </div>
                <div class="px-4 py-5 lg:p-6 shadow-md rounded-md bg-opacity-50 bg-blue-400">
                    <dl>
                        <dt class="text-sm font-medium leading-5 text-gray-500 truncate">
                        N-NET
                        </dt>
                        <dd class="mt-1 text-3xl font-semibold leading-9 text-gray-900">
                            {{$nnet}}
                        </dd>
                    </dl>
                </div>
                <div class="px-4 py-5 lg:p-6 shadow-md rounded-md bg-opacity-50 bg-yellow-400">
                    <dl>
                        <dt class="text-sm font-medium leading-5 text-gray-500 truncate">
                        คุณธรรม
                        </dt>
                        <dd class="mt-1 text-3xl font-semibold leading-9 text-gray-900">
                            {{$moral}}
                        </dd>
                    </dl>
                </div> --}}
                {{-- <div class="text-lg bg-gray-200 font-semibold text-gray-800 bg-opacity-50 rounded-lg border">GPA : {{$grade_avg}}</div> --}}
                {{-- <div class="text-lg bg-gray-200 font-semibold text-gray-800 bg-opacity-50 rounded-lg border">N-NET : {{$nnet}}</div>
                <div class="text-lg bg-gray-200 font-semibold text-gray-800 bg-opacity-50 rounded-lg border">คุณธรรม : {{$moral}}</div> --}}
              {{-- </div>
          </div>

          <div class="gap- items-center py-1 px-4 mx-auto max-w-screen-md md:grid md:grid-cols-2 md:py-12 md:px-6">
            <div class="mr-5">
                <div class="float-left mr-1 bg-green-400 rounded-full w-5 h-5"></div>
                <span class="text-sm align-top text-gray-600">หน่วยกิต {{$credit}}/{{$allcredit}}</span>
           </div>
            <div x-data="{width: 0}" x-init="$nextTick(() => { width = {{$credit_percent}} })" class="bg-gray-300 rounded-lg h-4 my-2" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                @if($credit_percent!=0)
                <div :style="`width: ${width}%; transition: width 5s;`" class="bg-green-400 h-4 rounded-full relative">
                    <div class="absolute text-xs font-semibold right-0 mr-2"><span x-text="width"></span>%</div>
                </div>
                @endif
            </div>
            <div class="mr-5">
                <div class="float-left mr-1 bg-orange-400 rounded-full w-5 h-5"></div>
                <span class="text-sm align-top text-gray-600">กพช {{$act_sum}}/200</span>
            </div>
            <div x-data="{width: 0}" x-init="$nextTick(() => { width = {{$act_percentage}} })" class="bg-gray-300 rounded-lg h-4 my-2" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                @if($act_percentage!=0)
                <div :style="`width: ${width}%; transition: width 5s;`" class="bg-orange-400 h-4 rounded-full relative">
                    <div class="absolute text-xs  font-semibold right-0 mr-2"><span x-text="width"></span>%</div>
                </div>
                @endif
            </div>
            <div class="mr-5">
              <div class="float-left mr-1 bg-yellow-400 rounded-full w-5 h-5"></div>
              <span class="text-sm align-top text-gray-600">ระยะเวลาเรียน {{$timelerning}} %</span>
          </div>
          <div x-data="{width: 0}" x-init="$nextTick(() => { width = {{$timelerning}} })" class="bg-gray-300 rounded-lg h-4 my-2" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" role="progressbar">
            @if($timelerning!=0)  
            <div :style="`width: ${width}%; transition: width 5s;`" class="bg-yellow-400 h-4 relative rounded-full">
                  <div class="absolute text-xs  font-semibold right-0 mr-2"><span x-text="width"></span>%</div>
              </div>
              @endif
          </div>
        </div>
    </section> --}}

    {{-- GRADE --}}
    <section class="bg-white dark:bg-gray-900">
        
        <div 
            class="gap- items-center py-1 px-4 mx-auto max-w-screen-md"
            x-data="{
            activeTab : 'tab1',
            isActive(tab){
                if(this.activeTab == tab){
                    return true;
                }else{
                    return false;
                }
            }
            }" >
            <!-- Tab Navigation-->
            <div class="flex my-2 text-sm font-semibold items-center text-gray-800">
                <div class="flex-grow border-t h-px mr-3"></div>
                ผลการเรียนรายภาค
                <div class="flex-grow border-t h-px ml-3"></div>
            </div>
            <div class="text-sm md:text-md font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
                    <li class="mr-2">
                        <span class="inline-block p-4 rounded-t-lg border-b-2 border-transparent">
                            ภาคเรียนที่ :
                        </span>
                    </li>
                    @foreach($semestrylist1 as $semestry)
                    <li class="mr-2 cursor-pointer"
                        @click="activeTab = {{$semestry->SEMESTRY}}">
                        <a 
                            :class="isActive({{$semestry->SEMESTRY}}) ? 
                            'inline-block p-4 text-white bg-violet-500 active underline rounded-t-lg shadow-md' 
                            : 'inline-block p-4 text-gray-600 border-blue-600  rounded-t-lg'">
                            {{$semestry->SEMESTRY}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- Tab Content-->
            <div class="p-2 text-gray-500 text-xs md:text-sm">
                {{-- <div class="flex my-2 text-sm font-semibold items-center text-gray-800">
                    <div class="flex-grow border-t h-px mr-3"></div>
                    ตารางผลการเรียน
                    <div class="flex-grow border-t h-px ml-3"></div>
                </div> --}}
                @foreach($grade as $g)
                <div x-cloak="" x-show="isActive({{$g['semestry']}})" class="hover:bg-violet-200 active:bg-violet-200">
                    <div class="flex ... text-xs md:text-sm">
                        <div class="flex-none ... p-2">
                            {{$g['semestry']}}
                        </div>
                        <div class="flex-none ... p-2">
                            {{$g['sub_code']}}
                        </div>
                        <div class="flex-auto w-64 ... p-2">
                            {{$g['sub_name']}}
                        </div>
                        <div class="flex-auto w-7 ... p-2">
                            {{$g['grade']}}
                        </div>
                      </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
</x-app-layout>

{{-- Script --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript"></script>
<script>
    var data_grade_analyze =  {{ Js::from($grade_analyze) }};
    const data = {
        labels: [
            'ทักษะการเรียนรู้',
            'ความรู้พื้นฐาน',
            'การประกอบอาชีพ',
            'ทักษะการดำเนินชีวิต',
            'การพัฒนาสังคม',
        ],
        datasets: [{
            label: 'คะแนนเฉลี่ยกลุ่มสาระ',
            data: data_grade_analyze,
            fill: true,
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgb(255, 99, 132)',
            pointBackgroundColor: 'rgb(255, 99, 132)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgb(255, 99, 132)'
        }]
    };

    const config = {
    type: 'bar',
    data: data,
    options: {
        elements: {
            line: {
                borderWidth: 3
            }
        },
        // scales: {
        //     r: {
        //         angleLines: {
        //             display: false
        //         },
        //         suggestedMin: 50,
        //         suggestedMax: 100
        //     }
        // }
    },
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>