<x-teachers-layout>
    <x-slot name="header">
        <h6 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight m-2">
            {{ __('ภาคเรียนปัจจุบัน') }} {{$semestry}}
        </h6>
        <form method="GET" action="{{ route('tdashboard') }}" class="">
        <div class="grid grid-cols-1 gap-2 md:grid md:grid-cols-2 justify-items-center">
            <div class="min-w-full" >
                {{-- <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ศสกร.ตำบล</label> --}}
                <select required id="tumbon" name="tumbon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 ">
                  {{-- @if(request()->get('tumbon')!='') <option selected>{{request()->get('tumbon')}}</option> @endif
                  @if(request()->get('tumbon')=='') <option selected>เลือกตำบล</option> @endif --}}
                  <option value="">เลือกตำบล</option>
                  @foreach($group as $grp)
                  <option value={{$grp->GRP_CODE}} {{$grp->GRP_NAME}}>{{$grp->GRP_CODE}} {{$grp->GRP_NAME}}</option>
                  @endforeach
                </select>
              </div>
            <div class="min-w-full">
                {{-- <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">รายงาน</label> --}}
                <select required id="studreport" name="studreport" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  {{-- @if(request()->get('studreport')!='') <option selected>{{request()->get('studreport')}}</option> @endif
                  @if(request()->get('studreport')=='') <option selected >เลือกรายงาน</option> @endif --}}
                  <option value="">เลือกรายงาน</option>
                  <option value="นักศึกษาทั้งหมด">นักศึกษาทั้งหมด</option>
                  <option value="เฉพาะผู้คาดว่าจะจบ">เฉพาะผู้คาดว่าจะจบ</option>
                  <option value="ไม่จบตกค้าง(ที่ไม่ได้ลงทะเบียนแล้ว)">ไม่จบตกค้าง (ที่ไม่ได้ลงทะเบียนแล้ว)</option>
                </select>
            </div>
          </div>
          <button type="submit" class="rounded-full p-2 mt-2 min-w-full bg-indigo-500 text-white">ดูรายงาน</button> 
        </form>
        {{-- <div>
          <span class="text-red-500 font-medium">หมายเหตุ</span>
        </div> --}}
        <div class="grid grid-cols-3 gap-2 mt-2">
          <div class="font-semibold text-xs truncate"> <span class="text-indigo-500">N-NET</span> : มีสิทธิสอบ N-NET ภาคเรียนปัจจุบัน </div> 
          <div class="font-semibold pl-2 text-xs truncate"> <span class="text-yellow-500">E-EXAM</span> : มีสิทธิสอบ E-EXAM ภาคเรียนปัจจุบัน </div>
          <!-- Tag 1-->
          <div class="flex items-center text-xs">
            <div class="text-blue-100 mr-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 fill-yellow-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
              </svg>              
            </div>
            <span class="text-indigo font-semibold truncate"> : คาดว่าจะจบหลักสูตร</span>
          </div>
        </div>
    </x-slot>

    <div class="flex flex-col max-w-srceen-lg">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full  py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full text-left text-sm font-light">
                <div class="flex flex-col-1 flex-row-1 justify-center p-4 bg-indigo-200 drop-shadow">
                  <div class="text-sm font-bold">ตำบล : <span class="font-normal">{{request()->get('tumbon')}}</span></div>
                  <div class="text-sm font-bold pl-4">รายงาน : <span class=" font-normal">{{request()->get('studreport')}}</span></div>
                </div>
                <thead class="border-b font-medium bg-white drop-shadow text-xs md:text-sm">                 
                  <tr class="bg-gray-200">
                    <th scope="col" class="p-2 text-center">ลำดับ</th>
                    <th scope="col" class="p-2">รหัส</th>
                    <th scope="col" class="p-2 hidden md:block">ระดับ</th>
                    <th scope="col" class="p-2">ชื่อ</th>
                    <th scope="col" class="p-2">นามสกุล</th>
                    <th scope="col" class="p-2">คาดว่าจะจบ</th>
                    <th scope="col" class="p-2 text-center">กพช.</th>
                    <th scope="col" class="p-2 text-center">N-NET</th>
                  </tr>
                </thead>
                <tbody class="text-xs md:text-sm">
                @foreach($data as $d)
                  <tr 
                  @if($d['lavel']==1) class="border-b bg-pink-100 shadow-md hover:bg-pink-300" @endif
                  @if($d['lavel']==2) class="border-b bg-green-100 shadow-md hover:bg-green-300" @endif
                  @if($d['lavel']==3) class="border-b bg-yellow-100 shadow-md hover:bg-yellow-300" @endif
                  >
                    <td class="p-2 text-center">{{$loop->iteration}}</td>
                    <td class="p-2">{{$d['id']}}</td>
                    <td class="p-2 hidden md:block">{{$d['lavel']}}</td>
                    <td class="p-2 w-15">{{$d['name']}}</td>
                    <td class="p-2">{{$d['surname']}}</td>
                    @if($d['expfin']==1)
                    <td class="p-2 text-violet-500 items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 fill-yellow-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                      </svg>                                           
                    </td>
                    @else
                    <td class="p-2">-</td>
                    @endif
                    <td class="p-2 text-center">{{$d['activity']}}</td>
                    @if($d['nt_sem']=="ผ่านแล้ว")
                    <td class="p-2 text-center text-green-500">{{$d['nt_sem']}}</td>
                    @elseif($d['nt_sem']=="มีสิทธิ")
                    <td class="p-2 text-center text-indigo-500">N-NET</td>
                    @elseif($d['nt_sem']=="E-Exam")
                    <td class="p-2 text-center text-yellow-500">{{$d['nt_sem']}}</td>
                    @else
                    <td class="p-2 text-center">{{$d['nt_sem']}} 55</td>
                    @endif
                  </tr>
                @endforeach
                </tbody>
              </table>
              @if($data==null) <section class="p-10 text-center text-lg">**ไม่พบข้อมูล กรุณาเลือกรายการใหม่**</section> @endif
            </div>
          </div>
        </div>
      </div>
</x-teachers-layout>