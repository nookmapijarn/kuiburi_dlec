<x-app-layout>
    <x-slot name="header">
        <h6 class="font-semibold text-gray-800  leading-tight">
            {{ __('การลงทะเบียน') }}
        </h6>      
    </x-slot>
{{-- Content --}}
<div class="grid grid-cols-1 gap-2 p-2 md:grid md:grid-cols-3 md:gap-2 md:p-2">
  {{-- เรียนแล้ว --}}
  <div class="overflow-y-auto max-h-screen rounded-md">
    <table class="min-w-full text-left text-xs font-light">
      <div scope="col" class="p-4 text-center text-lg shdow-md bg-green-200 w-full sticky top-0 z-49">เรียนแล้ว {{$sumcredit}} นก.</div>
      <thead class="border-b font-medium dark:border-neutral-500 bg-white">             
        <tr>
          <th scope="col" class="p-2 text-center">ลำดับ</th>
          <th scope="col" class="p-2">รหัสวิชา</th>
          <th scope="col" class="p-2">รายวิชา</th>
          <th scope="col" class="p-2">ประเภท</th>
          <th scope="col" class="p-2 text-center">หน่วยกิต</th>
          <th scope="col" class="p-2 text-center">ผลการเรียน</th>
        </tr>
      </thead>
      <tbody class="text-xs">
      @foreach($learned as $l)
        <tr class="border-b dark:border-neutral-500 bg-white shadow-md hover:bg-violet-200 active:bg-violet-200">
          <td class="p-2 text-center">{{$loop->iteration}}</td>
          <td class="p-2">{{$l['sub_code']}}</td>
          <td class="p-2 text-ellipsis overflow-hidden">{{$l['sub_name']}}</td>
          <td class="p-2 text-left">@if ($l['sub_type']==1) บังคับ @else เลือก @endif </td>
          <td class="p-2 text-center">{{$l['sub_credit']}}</td>
          <td class="p-2 text-center text-green-600">{{$l['grade']}}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
  {{-- กำลังเรียน --}}
  <div class="overflow-y-auto max-h-screen rounded-md">
    <table class="min-w-full text-left text-xs font-light">
      <div scope="col" class="p-4 text-center text-lg shdow-md bg-yellow-200 w-full sticky top-0 z-49">กำลังเรียน ภาคเรียนที่ {{$semestry}}</div>
      <thead class="border-b font-medium dark:border-neutral-500 bg-white">             
        <tr>
          <th scope="col" class="p-2 text-center">ลำดับ</th>
          <th scope="col" class="p-2">รหัสวิชา</th>
          <th scope="col" class="p-2">รายวิชา</th>
          <th scope="col" class="p-2">ประเภท</th>
          <th scope="col" class="p-2 text-center">หน่วยกิต</th>
          <th scope="col" class="p-2 text-center">ผลการเรียน</th>
        </tr>
      </thead>
      <tbody class="text-xs">
      @foreach($current_regis as $cr)
        <tr class="border-b dark:border-neutral-500 bg-white shadow-md hover:bg-violet-200 active:bg-violet-200">
          <td class="p-2 text-center">{{$loop->iteration}}</td>
          <td class="p-2">{{$cr->SUB_CODE}}</td>
          <td class="p-2 text-ellipsis overflow-hidden">{{$cr->SUB_NAME}}</td>
          <td class="p-2 text-left">@if ($cr->SUB_TYPE==1) บังคับ @else เลือก @endif </td>
          <td class="p-2 text-center">{{$cr->SUB_CREDIT}}</td>
          <td class="p-2 text-center text-green-600">{{$cr->GRADE}}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
  {{-- ยังไม่เรียน/ไม่ผ่าน --}}
  <div class="overflow-y-auto max-h-screen rounded-md ">
    <table class="min-w-full text-left text-xs font-light">
      <div scope="col" class="p-4 text-center text-lg shdow-md bg-gray-200 w-full sticky top-0 z-49">ยังไม่เรียน/ไม่ผ่าน</div>
      <thead class="border-b font-medium dark:border-neutral-500 bg-white">               
        <tr>
          <th scope="col" class="p-2 text-center">ลำดับ</th>
          <th scope="col" class="p-2">รหัสวิชา</th>
          <th scope="col" class="p-2">รายวิชา</th>
          <th scope="col" class="p-2">ประเภท</th>
          <th scope="col" class="p-2 text-center">หน่วยกิจ</th>
          <th scope="col" class="p-2 text-center">ผลการเรียน</th>
        </tr>
      </thead>
      <tbody class="text-xs">
      @foreach($notlearned as $l)
        <tr class="border-b dark:border-neutral-500 bg-white shadow-md hover:bg-violet-200 active:bg-violet-200">
          <td class="p-2 text-center">{{$loop->iteration}}</td>
          <td class="p-2">{{$l['sub_code']}}</td>
          <td class="p-2 text-ellipsis overflow-hidden">{{$l['sub_name']}}</td>
          <td class="p-2 text-left">@if ($l['sub_type']==1) บังคับ @else เลือก @endif </td>
          <td class="p-2 text-center">{{$l['sub_credit']}}</td>
          <td class="p-2 text-center">-</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
</x-app-layout>
