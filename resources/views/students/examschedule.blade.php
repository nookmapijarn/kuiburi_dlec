<x-app-layout>
  <h4 class="font-semibold text-lg text-gray-100 dark:text-gray-200 leading-tight  text-center py-5 bg-orange-600">
    {{ __('ตารางสอบปลายภาค - ภาคเรียน 1/2566') }}
</h4>      
    <div class=" text-center pt-2 text-sm" >  สนามสอบ โรงเรียนโพธิ์ทอง"จินดามณี" อ.โพธิ์ทอง จ.อ่างทอง</div>
    @foreach($student as $s)
      <div class=" text-center" > {{$s->ID}} {{$s->PRENAME}}{{$s->NAME}} {{$s->SURNAME}} </div>
    @endforeach
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full  py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full text-left text-xs md:text-sm font-light">
                <thead class="border-b font-medium dark:border-neutral-500 bg-white">                  
                  <tr>
                    <th scope="col" class="p-2 text-center">ลำดับ</th>
                    <th scope="col" class="p-2">รหัสวิชา</th>
                    <th scope="col" class="p-2">รายวิชา</th>
                    <th scope="col" class="p-2">วัน</th>
                    <th scope="col" class="p-2">เวลา</th>
                    <th scope="col" class="p-2 text-center">ห้อง</th>
                  </tr>
                </thead>
                <tbody class="text-xs md:text-sm">
                @foreach($schedule as $s)
                  <tr class="border-b dark:border-neutral-500 bg-white shadow-md hover:bg-violet-200 active:bg-violet-200">
                    <td class="p-2 text-center">{{$loop->iteration}}</td>
                    <td class="p-2">{{$s['sub_code']}}</td>
                    <td class="p-2 text-ellipsis overflow-hidden">{{$s['sub_name']}}</td>
                    <td class="p-2 w-15">@if($s['exam_day']!=0)  {{$s['exam_day']}} @endif</td>
                    <td class="p-2">@if($s['exam_start']!=0) {{$s['exam_start']}}-{{$s['exam_end']}} น. @endif</td>
                    <td class="p-2 text-center">{{$s['exam_room']}}</td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div name="" class=" bg-white">
        <h6 class="font-semibold text-lg text-gray-100 leading-tight text-center py-5 bg-indigo-600">
          {{ __('ตารางสอบ N-NET - ภาคเรียน 1/2566') }}
        </h6>
          @if($nnet === 'N-NET') 
          <div class="font-semibold text-lg text-green-400 leading-tight text-center p-5">
            {{ __('"คุณมีสิทธิสอบ"') }} รายชื่อผู้มีสิทธิสอบในตาราง
          </div>
          <div class=" text-center text-sm" >  สนามสอบ โรงเรียนโพธิ์ทอง"จินดามณี" อ.โพธิ์ทอง จ.อ่างทอง</div>
          <div class=" text-center text-sm" >  ประถม และ ม.ต้น สอบระบบปกติ</div>
          <div class=" text-center text-sm" >  ม.ปลาย สอบระบบคอมพิวเตอร์</div>
            <table class="w-full p-15 text-left text-xs md:text-sm font-light">
                <thead class="border-b font-medium dark:border-neutral-500 bg-white">                  
                  <tr>
                    <th scope="col" class="p-2">รหัส</th>
                    <th scope="col" class="p-2 text-ellipsis overflow-hidden">คำนำหน้า</th>
                    <th scope="col" class="p-2">ชื่อ</th>
                    <th scope="col" class="p-2">สกุล</th>
                    <th scope="col" class="p-2">วัน</th>
                    <th scope="col" class="p-2">เวลา</th>
                    <th scope="col" class="p-2 text-center">ห้อง</th>
                  </tr>
                </thead>
                <tbody class="text-xs md:text-sm">
                  @foreach($student as $s)
                  <tr class="border-b dark:border-neutral-500 bg-white hover:bg-violet-200 active:bg-violet-200">
                    <td class="p-2">{{$s->ID}}</td>
                    <td class="p-2">{{$s->PRENAME}}</td>
                    <td class="p-2">{{$s->NAME}}</td>
                    <td class="p-2">{{$s->SURNAME}}</td>  
                    <td class="p-2">27/08/66</td>
                    <td class="p-2"><a class="text-blue-400 underline" href="https://www.niets.or.th/th/content/view/25693">ดู</a></td>
                    <td class="p-2 text-center"><a class="text-blue-400 underline" href="https://www.niets.or.th/th/content/view/25693">ดู</a></td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
          @endif
          @if($nnet === 'ผ่านแล้ว') 
            <h4 class="font-semibold text-lg text-gray-400 leading-tight text-center p-5">
              {{ __('คุณสอบผ่านแล้ว') }} {{$nnet}}
            </h4>
          @endif
          @if($nnet === 'E-Exam') 
            <h4 class="font-semibold text-lg text-gray-400 leading-tight text-center p-5">
              {{ __('คุณต้องสอบ E-Exam') }} {{$nnet}}
            </h4>
          @endif
          @if($nnet === null) 
            <h4 class="font-semibold text-lg text-gray-400 leading-tight text-center p-5">
              {{ __('"คุณยังไม่มีสิทธิสอบ"') }} {{$nnet}}
            </h4>
          @endif
      </div>
</x-app-layout>
