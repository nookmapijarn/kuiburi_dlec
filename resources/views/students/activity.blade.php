<x-app-layout>
    <x-slot name="header">
        <h6 class="font-semibold text-gray-800  leading-tight">
            {{ __('กิจกรรม กพช.') }}
        </h6>      
    </x-slot>
{{-- Content --}}
<div class="grid grid-cols-1 gap-2 p-2 md:grid md:grid-cols-1 md:gap-2 md:p-2">
  {{-- เรียนแล้ว --}}
  <div class="overflow-y-auto max-h-screen rounded-md">
    <table class="min-w-full text-left text-xs font-light">
      <thead class="border-b font-medium dark:border-neutral-500 bg-white">             
        <tr>
          <th scope="col" class="p-2 text-center">ภาคเรียนที่</th>
          <th scope="col" class="p-2">กิจกรรม</th>
          <th scope="col" class="p-2">จำนวนชั่วโมง</th>
        </tr>
      </thead>
      <tbody class="text-xs">
      @foreach($activity as $act)
        <tr class="border-b dark:border-neutral-500 bg-white shadow-md hover:bg-violet-200 active:bg-violet-200">
          <td class="p-2 text-center">{{$act->SEMESTRY}}</td>
          <td class="p-2">{{$act->ACTIVITY}}</td>
          <td class="p-2">{{$act->HOUR}}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
</x-app-layout>
