<x-help-layout>
  <div class="bg-white py-8 sm:py-8">
    <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
        <div class="max-w-2xl">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">ผู้บริหาร</h2>
        {{-- <p class="mt-6 text-lg leading-8 text-gray-600">ศูนย์ส่งเสริมการเรียนรู้อำเภอโพธิ์ทองมีบุคคลากรทั้งหมด  26 รายดังนี้.</p> --}}
        </div>
        <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
        <li>
            <div class="flex items-center gap-x-6">
            <img class="h-16 w-16 rounded-full" src="{{asset('storage/avatar/1.jpg');}}" alt="">
            <div>
                <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">นางสาวกุหลาบ  อ่อนระทวย</h3>
                <p class="text-sm font-semibold leading-6 text-indigo-600">ผอ.สกร.อำเภอโพธิ์ทอง</p>
                <p class="text-sm font-semibold leading-6 text-indigo-600">062-4340888</p>
            </div>
            </div>
        </li>
        <!-- More people... -->
        </ul>
    </div>
    <div class="bg-white py-8 sm:py-8">
        <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
            <div class="max-w-2xl">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">ข้าราชการ 4 คน</h2>
            {{-- <p class="mt-6 text-lg leading-8 text-gray-600">สกร.อำเภอโพธิ์ทอง มีข้าราชการทั้งหมด 4 ท่านดังนี้.</p> --}}
            </div>
            <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            <li>
                <div class="flex items-center gap-x-6">
                <img class="h-16 w-16 rounded-full" src="{{asset('storage/avatar/2.jpg');}}" alt="">
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">นางสาวมะลิ  จุ้ยกง</h3>
                    <p class="text-sm font-semibold leading-6 text-indigo-600">บรรณารักษ์ชำนาญการพิเศษ</p>
                </div>
                </div>
            </li>
            <li>
                <div class="flex items-center gap-x-6">
                <img class="h-16 w-16 rounded-full" src="{{asset('storage/avatar/3.jpg');}}" alt="">
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">นายเลิศชาย  ปานมุข</h3>
                    <p class="text-sm font-semibold leading-6 text-indigo-600">ครูชำนาญการ</p>
                </div>
                </div>
            </li>
            <li>
                <div class="flex items-center gap-x-6">
                <img class="h-16 w-16 rounded-full" src="{{asset('storage/avatar/4.jpg');}}" alt="">
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">นายนนทชัย  มาพิจารณ์</h3>
                    <p class="text-sm font-semibold leading-6 text-indigo-600">ครู</p>
                    <p class="text-sm font-semibold leading-6 text-indigo-600">062-8212343</p>
                </div>
                </div>
            </li>
            <li>
                <div class="flex items-center gap-x-6">
                <img class="h-16 w-16 rounded-full" src="{{asset('storage/avatar/unkhonw.png');}}" alt="">
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">นายนพนันท์ บัวเผื่อน</h3>
                    <p class="text-sm font-semibold leading-6 text-indigo-600">ลูกจ้างประจำ</p>
                </div>
                </div>
            </li>
            <!-- More people... -->
            </ul>
        </div>
    </div>
     {{-- ครูอาสา  --}}
     <div class="bg-white pt-5">
      <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-10 px-6">
          <div class="max-w-2xl">
              <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">นักวิชาการศึกษา 2 คน</h2>
              {{-- <p class="mt-6 text-lg leading-8 text-gray-600">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse.</p> --}}
          </div>
          <ul role="list" class="divide-y divide-gray-100 w-full">
              <li class="flex justify-between gap-x-6 py-5">
                <div class="flex gap-x-4">
                  <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{asset('storage/avatar/6.jpg');}}" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">นางสาวสยาม  ก๋งฉิน</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">นักวิชาการศึกษา</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-sm leading-6 text-gray-900">เบอร์โทร</p>
                  <p class="mt-1 text-xs leading-5 text-gray-500">-</p>
                </div>
              </li>
              <li class="flex justify-between gap-x-6 py-5">
                <div class="flex gap-x-4">
                  <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{asset('storage/avatar/7.jpg');}}" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">นางสาวกนกพร  พรหมสนธิ</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">นักวิชาการศึกษา</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-sm leading-6 text-gray-900">เบอร์โทร</p>
                  <p class="mt-1 text-xs leading-5 text-gray-500">-</p>
                </div>
              </li>
            </ul>  
      </div>
  </div>
     {{-- ครูอาสา  --}}
     <div class="bg-white pt-5">
        <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-10 px-6">
            <div class="max-w-2xl">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">ครู อาสาสมัคร 2 คน</h2>
                {{-- <p class="mt-6 text-lg leading-8 text-gray-600">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse.</p> --}}
            </div>
            <ul role="list" class="divide-y divide-gray-100 w-full">
                <li class="flex justify-between gap-x-6 py-5">
                  <div class="flex gap-x-4">
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{asset('storage/avatar/8.jpg');}}" alt="">
                    <div class="min-w-0 flex-auto">
                      <p class="text-sm font-semibold leading-6 text-gray-900">นางสาวฤทัย  ช้างพันธุ์</p>
                      <p class="mt-1 truncate text-xs leading-5 text-gray-500">ครูอาสาสมัคร</p>
                    </div>
                  </div>
                  <div class="hidden sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm leading-6 text-gray-900">เบอร์โทร</p>
                    <p class="mt-1 text-xs leading-5 text-gray-500">-</p>
                  </div>
                </li>
                <li class="flex justify-between gap-x-6 py-5">
                  <div class="flex gap-x-4">
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{asset('storage/avatar/9.jpg');}}" alt="">
                    <div class="min-w-0 flex-auto">
                      <p class="text-sm font-semibold leading-6 text-gray-900">นางนงค์รักษ์  ไหมเงิน</p>
                      <p class="mt-1 truncate text-xs leading-5 text-gray-500">ครูอาสาสมัคร</p>
                    </div>
                  </div>
                  <div class="hidden sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm leading-6 text-gray-900">เบอร์โทร</p>
                    <p class="mt-1 text-xs leading-5 text-gray-500">089-0218801</p>
                  </div>
                </li>
              </ul>  
        </div>
    </div>
     {{-- ครูตำบล  --}}
     <div class="bg-white pt-5">
      <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-10 px-6">
          <div class="max-w-2xl">
              <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">ครู กศน.ตำบล 14 คน</h2>
              {{-- <p class="mt-6 text-lg leading-8 text-gray-600">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse.</p> --}}
          </div>
          <ul role="list" class="divide-y divide-gray-100 w-full">
              <li class="flex justify-between gap-x-6 py-5">
                <div class="flex gap-x-4">
                  <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{asset('storage/avatar/10.jpg');}}" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">นางแววตา  เสือลายตลับ</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">ครู กศน.ตำบลบางพลับ</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-sm leading-6 text-gray-900">เบอร์โทร</p>
                  <p class="mt-1 text-xs leading-5 text-gray-500">064-9814528</p>
                </div>
              </li>
              <li class="flex justify-between gap-x-6 py-5">
                <div class="flex gap-x-4">
                  <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{asset('storage/avatar/11.jpg');}}" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">นางสาวชัญญ์ธนันท์  วันอินทร์</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">ครู กศน.ตำบลอ่างแก้ว</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-sm leading-6 text-gray-900">เบอร์โทร</p>
                  <p class="mt-1 text-xs leading-5 text-gray-500">-</p>
                </div>
              </li>              
              <li class="flex justify-between gap-x-6 py-5">
                <div class="flex gap-x-4">
                  <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{asset('storage/avatar/unkhonw.png');}}" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">นางสาวชยุตา  ประสมศิลป์</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">ครู กศน.ตำบลหนองแม่ไก่</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-sm leading-6 text-gray-900">เบอร์โทร</p>
                  <p class="mt-1 text-xs leading-5 text-gray-500">064-2646197</p>
                </div>
              </li>              
              <li class="flex justify-between gap-x-6 py-5">
                <div class="flex gap-x-4">
                  <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{asset('storage/avatar/13.jpg');}}" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">นางสุนิศา  พึ่งญิญโญ</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">ครู กศน.ตำบลยางช้าย</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-sm leading-6 text-gray-900">เบอร์โทร</p>
                  <p class="mt-1 text-xs leading-5 text-gray-500">-</p>
                </div>
              </li>              
              <li class="flex justify-between gap-x-6 py-5">
                <div class="flex gap-x-4">
                  <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{asset('storage/avatar/14.jpg');}}" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">นางสาวอรวรรณ  นิ่มกุล</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">ครู กศน.ตำบลโพธิ์รังนก</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-sm leading-6 text-gray-900">เบอร์โทร</p>
                  <p class="mt-1 text-xs leading-5 text-gray-500">095-7171554</p>
                </div>
              </li>              
              <li class="flex justify-between gap-x-6 py-5">
                <div class="flex gap-x-4">
                  <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{asset('storage/avatar/15.jpg');}}" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">นายภูบดินทร์  บ่ายเที่ยง</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">ครู กศน.ตำบลรำมะสัก</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-sm leading-6 text-gray-900">เบอร์โทร</p>
                  <p class="mt-1 text-xs leading-5 text-gray-500">098-5348861</p>
                </div>
              </li>              
              <li class="flex justify-between gap-x-6 py-5">
                <div class="flex gap-x-4">
                  <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{asset('storage/avatar/16.jpg');}}" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">นางสาวอนุกูล  ทองเติม</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">ครู กศน.ตำบลบางระกำ</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-sm leading-6 text-gray-900">เบอร์โทร</p>
                  <p class="mt-1 text-xs leading-5 text-gray-500">092-4127197</p>
                </div>
              </li>              
              <li class="flex justify-between gap-x-6 py-5">
                <div class="flex gap-x-4">
                  <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{asset('storage/avatar/unkhonw.png');}}" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">นางสาวสุวนันท์  กลิ่นสุคนธ์</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">ครู กศน.ตำบลบ่อแร่</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-sm leading-6 text-gray-900">เบอร์โทร</p>
                  <p class="mt-1 text-xs leading-5 text-gray-500">084-7992988</p>
                </div>
              </li>              
              <li class="flex justify-between gap-x-6 py-5">
                <div class="flex gap-x-4">
                  <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{asset('storage/avatar/18.jpg');}}" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">นางสาวสุพัตรา  หว้านหอม</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">ครู กศน.ตำบลสามง่าม</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-sm leading-6 text-gray-900">เบอร์โทร</p>
                  <p class="mt-1 text-xs leading-5 text-gray-500">092-5282524</p>
                </div>
              </li>              
              <li class="flex justify-between gap-x-6 py-5">
                <div class="flex gap-x-4">
                  <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{asset('storage/avatar/19.jpg');}}" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">นางสาวประภาพร  ประวัติวิไล</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">ครู กศน.ตำบลทางพระ</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-sm leading-6 text-gray-900">เบอร์โทร</p>
                  <p class="mt-1 text-xs leading-5 text-gray-500">092-4050086</p>
                </div>
              </li>              
              <li class="flex justify-between gap-x-6 py-5">
                <div class="flex gap-x-4">
                  <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{asset('storage/avatar/20.jpg');}}" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">นางสาวตวงพร  รุ่งเรืองศรี</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">ครู กศน.ตำบลอินทประมูล</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-sm leading-6 text-gray-900">เบอร์โทร</p>
                  <p class="mt-1 text-xs leading-5 text-gray-500">-</p>
                </div>
              </li>              
              <li class="flex justify-between gap-x-6 py-5">
                <div class="flex gap-x-4">
                  <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{asset('storage/avatar/21.jpg');}}" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">นางสาวจตุพร  พวงเงิน</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">ครู กศน.ตำบลโคกพุทรา</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-sm leading-6 text-gray-900">เบอร์โทร</p>
                  <p class="mt-1 text-xs leading-5 text-gray-500">099-0414232</p>
                </div>
              </li>              
              <li class="flex justify-between gap-x-6 py-5">
                <div class="flex gap-x-4">
                  <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{asset('storage/avatar/22.jpg');}}" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">นางสาวอุทัยวรรณ  พิลาศาสตร์</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">ครู กศน.ตำบลบางเจ้าฉ่า</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-sm leading-6 text-gray-900">เบอร์โทร</p>
                  <p class="mt-1 text-xs leading-5 text-gray-500">062-6671607</p>
                </div>
              </li>              
              <li class="flex justify-between gap-x-6 py-5">
                <div class="flex gap-x-4">
                  <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{asset('storage/avatar/23.jpg');}}" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">นางสาวพรพรรณ  วินิจฉัย</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">ครู กศน.ตำบลคำหยาด</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-sm leading-6 text-gray-900">เบอร์โทร</p>
                  <p class="mt-1 text-xs leading-5 text-gray-500">062-3128042</p>
                </div>
              </li>
            </ul>  
      </div>
  </div>
     {{-- ลูกจ้างชั่วคราว  --}}
     <div class="bg-white pt-5">
      <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-10 px-6">
          <div class="max-w-2xl">
              <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">ลูกจ้างชั่วคราว 3 คน</h2>
              {{-- <p class="mt-6 text-lg leading-8 text-gray-600">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse.</p> --}}
          </div>
          <ul role="list" class="divide-y divide-gray-100 w-full">
            <li class="flex justify-between gap-x-6 py-5">
              <div class="flex gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{asset('storage/avatar/unkhonw.png');}}" alt="">
                <div class="min-w-0 flex-auto">
                  <p class="text-sm font-semibold leading-6 text-gray-900">นายชูชาติ  อันคล้าย</p>
                  <p class="mt-1 truncate text-xs leading-5 text-gray-500">นักงานภารโรง</p>
                </div>
              </div>
              <div class="hidden sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-900">เบอร์โทร</p>
                <p class="mt-1 text-xs leading-5 text-gray-500">-</p>
              </div>
            </li>
              <li class="flex justify-between gap-x-6 py-5">
                <div class="flex gap-x-4">
                  <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{asset('storage/avatar/25.jpg');}}" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">นางธนพร  รื่นกาญจนถาวร</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">ครูผู้สอนคนพิการ</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-sm leading-6 text-gray-900">เบอร์โทร</p>
                  <p class="mt-1 text-xs leading-5 text-gray-500">089-2404050</p>
                </div>
              </li>
              <li class="flex justify-between gap-x-6 py-5">
                <div class="flex gap-x-4">
                  <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{asset('storage/avatar/unkhonw.png');}}" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">นางสาวรตะวัน วราโภค</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">บรรณารักษ์</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-sm leading-6 text-gray-900">เบอร์โทร</p>
                  <p class="mt-1 text-xs leading-5 text-gray-500">-</p>
                </div>
              </li>
            </ul>  
      </div>
  </div>
</x-help-layout>