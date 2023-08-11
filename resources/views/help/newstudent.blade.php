<x-help-layout>
    <section class="bg-white grid justify-items-center">
        <form class="max-w-screen-md w-full p-10">
            <div class="text-center text-xl p-5 bg-green-200 mb-2 shadow-md">
                ใบสมัครขึ้นทะเบียนเป็นนักศึกษา
                <div class="text-center text-xs">หลักสูตรการศึกษานอกระบบระดับการศึกษาขั้นพื้นฐาน พุทธศักราช 2551</div>
                <div class="text-center text-xs">ศูนย์ส่งเสริมการเรียนรู้อำเภอโพธิ์ทอง</div>
            </div>
            <div class="grid gap-6 mb-6 md:grid-cols-2 p-4 shadow-md">
                {{-- IMG --}}
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-32 h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 ">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">รูปถ่ายหน้าตรง</span></p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div> 
                <div></div>
                <div>
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">คำนำหน้า</label>
                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>เลือก</option>
                        <option value="CA">นาย</option>
                        <option value="FR">นาง</option>
                        <option value="DE">นางสาว</option>
                    </select>
                </div>  
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ชื่อ (ไม่ใส่คำนำหน้า)</label>
                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>
                <div>
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">นามสกุล</label>
                    <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>
                <div>
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">วุฒิเดิม</label>
                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>เลือก</option>
                        <option value="US">ไม่มี</option>
                        <option value="CA">ประถมศึกษา</option>
                        <option value="FR">มัธยมศึกษาตอนต้น</option>
                        <option value="DE">มัธยมศึกษาตอนปลาย</option>
                        <option value="DE">ปวช.</option>
                    </select>
                </div>  
                <div>
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">สมัครระดับชั้น</label>
                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>เลือก</option>
                        <option value="CA">ประถมศึกษา</option>
                        <option value="FR">มัธยมศึกษาตอนต้น</option>
                        <option value="DE">มัธยมศึกษาตอนปลาย</option>
                    </select>
                </div>  
                <div>
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">กศน.ตำบล</label>
                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>เลือก</option>
                        <option value="4011 บางพลับ">4011 บางพลับ</option>
                        <option value="4012 บางพลับ">4012 บางพลับ</option>
                        <option value="4021 อ่างแก้ว">4021 อ่างแก้ว</option>
                        <option value="4031 หนองแม่ไก่">4031 หนองแม่ไก่</option>
                        <option value="4041 ยางช้าย">4041 ยางช้าย</option>
                        <option value="4051 โพธิ์รังนก">4051 โพธิ์รังนก</option>
                        <option value="4061 รำมะสัก">4061 รำมะสัก</option>
                        <option value="4071 บางระกำ">4071 บางระกำ</option>
                        <option value="4081 บ่อแร่">4081 บ่อแร่</option>
                        <option value="4091 สามง่าม">4091 สามง่าม</option>
                        <option value="4101 ทางพระ">4101 ทางพระ</option>
                        <option value="4102 ทางพระ">4102 ทางพระ</option>
                        <option value="4111 อินทประมูล">4111 อินทประมูล</option>
                        <option value="4121 องครักษ์">4121 องครักษ์</option>
                        <option value="4131 โคกพุทรา">4131 โคกพุทรา</option>
                        <option value="4141 บางเจ้าฉ่า">4141 บางเจ้าฉ่า</option>
                        <option value="4151 คำหยาด">4151 คำหยาด</option>
                        <option value="4171 พิการ">4171 พิการ</option>
                    </select>
                </div>  
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">เบอร์โทร</label>
                    <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                </div>
                <div class="mb-6">
                    <label for="card" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">สำเนาบัตรประชาชน</label>
                    <input type="file" id="card" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required>
                </div> 
                <div class="mb-6">
                    <label for="cer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">สำเนาวุฒิการศึกษา</label>
                    <input type="file" id="cer" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required>
                </div> 
                <div class="mb-6">
                    <label for="house" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">สำเนาทะเบียนบ้าน</label>
                    <input type="file" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required>
                </div> 
            </div>
            <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
                </div>
                <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">ยอบรับเงื่อนไข <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">คุณสมบัติผู้สมัคร</a>.</label>
            </div>
            <button disabled type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">สมัครเรียน</button>
        </form>
    </section>
    
</x-help-layout>