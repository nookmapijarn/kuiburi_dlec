<x-help-layout>
    <section class="bg-white grid justify-items-center">
        <form action="{{ route('ติดตามผู้จบ.store') }}" method="POST"  class="max-w-screen-md w-full p-10" enctype="multipart/form-data">
            @csrf
            <div class="text-center text-xl p-5  bg-yellow-200 mb-2 shadow-md">
                แบบติดตามผู้สำเร็จการศึกษา
                <div class="text-center text-xs">หลักสูตรการศึกษานอกระบบระดับการศึกษาขั้นพื้นฐาน พุทธศักราช 2551</div>
                <div class="text-center text-xs">ศูนย์ส่งเสริมการเรียนรู้อำเภอกุยบุรี</div>
            </div>
            {{-- Part 1 --}}
            <div class="grid gap-6 mb-6 md:grid-cols-1 p-4 shadow-md">
                {{-- IMG --}}
                <div class="flex items-center justify-center w-full h-48 relative overflow-hidden border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 ">
                    <div class="bg-indigo-300 ...">
                        <img id="preview" src="#" alt="Preview Image" style="display: none; object-cover h-48 w-96">
                    </div>
                    <label for="IMG_1" class="flex flex-col absolute items-center justify-center">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 text-center"><span class="font-semibold">ภาพถ่าย (ชุดทำงาน/นักศึกษา)</span></p>
                        </div>
                        <input id="IMG_1" name="IMG_1" type="file" class="hidden" onchange="previewImage(event)" required>
                    </label>
                </div> 
                {{-- <input type="file" name="image" id="image" onchange="previewImage(event)">

                <div>
                    <img id="preview" src="#" alt="Preview Image" style="display: none;">
                </div> --}}
                <div>
                    <label for="STD_CODE" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">รหัสนักศึกษา</label>
                    <input type="number" id="STD_CODE" name="STD_CODE" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600" placeholder="">
                </div>
                <div>
                    <label for="PRENAME" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">คำนำหน้า</label>
                    <select id="PRENAME" required name="PRENAME" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option selected>เลือก</option>
                        <option value="นาย">นาย</option>
                        <option value="นาง">นาง</option>
                        <option value="นางสาว">นางสาว</option>
                    </select>
                </div>  
                <div>
                    <label for="NAME" required class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ชื่อ (ไม่ใส่คำนำหน้า)</label>
                    <input type="text" id="NAME" name="NAME" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  " placeholder=""  >
                </div>
                <div>
                    <label for="SURNAME" required class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">นามสกุล</label>
                    <input type="text" id="SURNAME" name="SURNAME" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  " placeholder=""  >
                </div>
                <div>
                    <label for="FIN_GRADE" required class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ระดับที่จบ</label>
                    <select id="FIN_GRADE" name="FIN_GRADE" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
                        <option selected>เลือก</option>
                        <option value="1">ประถมศึกษา</option>
                        <option value="2">มัธยมศึกษาตอนต้น</option>
                        <option value="3">มัธยมศึกษาตอนปลาย</option>
                    </select>
                </div>  
                <div>
                    <label for="FIN_SEM" required class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ภาคเรียนที่จบ</label>
                    <select id="FIN_SEM" name="FIN_SEM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
                        <option selected>เลือก</option>
                        <option value="2/66">ภาคเรียนที่ 2/66</option>
                        <option value="1/66">ภาคเรียนที่ 1/66</option>
                        <option value="2/65">ภาคเรียนที่ 2/65</option>
                        <option value="1/65">ภาคเรียนที่ 1/65</option>
                        <option value="2/64">ภาคเรียนที่ 2/64</option>
                        <option value="1/64">ภาคเรียนที่ 1/64</option>
                        <option value="2/63">ภาคเรียนที่ 2/63</option>
                        <option value="1/63">ภาคเรียนที่ 1/63</option>
                        <option value="2/62">ภาคเรียนที่ 2/62</option>
                        <option value="1/62">ภาคเรียนที่ 1/62</option>
                        <option value="2/61">ภาคเรียนที่ 2/61</option>
                        <option value="1/61">ภาคเรียนที่ 1/61</option>
                        <option value="2/60">ภาคเรียนที่ 2/60</option>
                        <option value="1/60">ภาคเรียนที่ 1/60</option>
                        <option value="2/59">ภาคเรียนที่ 2/59</option>
                        <option value="1/59">ภาคเรียนที่ 1/59</option>
                        <option value="2/58">ภาคเรียนที่ 2/58</option>
                        <option value="1/58">ภาคเรียนที่ 1/58</option>
                        <option value="2/57">ภาคเรียนที่ 2/57</option>
                        <option value="1/57">ภาคเรียนที่ 1/57</option>
                        <option value="1/99">ไม่ทราบ</option>
                    </select>
                </div>  
                <div>
                    <label for="GRP_CODE" required class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">กศน.ตำบล</label>
                    <select id="GRP_CODE" name="GRP_CODE" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
                        <option selected>เลือก</option>
                        <option value="400">อำเภอกุยบุรี</option>
                        <option value="4011">4011 บางพลับ</option>
                        <option value="4012">4012 บางพลับ</option>
                        <option value="4021">4021 อ่างแก้ว</option>
                        <option value="4031">4031 หนองแม่ไก่</option>
                        <option value="4041">4041 ยางช้าย</option>
                        <option value="4051">4051 โพธิ์รังนก</option>
                        <option value="4061">4061 รำมะสัก</option>
                        <option value="4071">4071 บางระกำ</option>
                        <option value="4081">4081 บ่อแร่</option>
                        <option value="4091">4091 สามง่าม</option>
                        <option value="4101">4101 ทางพระ</option>
                        <option value="4102">4102 ทางพระ</option>
                        <option value="4111">4111 อินทประมูล</option>
                        <option value="4121">4121 องครักษ์</option>
                        <option value="4131">4131 โคกพุทรา</option>
                        <option value="4141">4141 บางเจ้าฉ่า</option>
                        <option value="4151">4151 คำหยาด</option>
                        <option value="4171">4171 พิการ</option>
                    </select>
                </div>  
                <div>
                    <label for="GENDER" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">เพศ</label>
                    <select id="GENDER" name="GENDER" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
                        <option selected>เลือก</option>
                        <option value="001">ชาย</option>
                        <option value="002">หญิง</option>
                        <option value="003">พระ</option>
                    </select>
                </div> 
                <div>
                    <label for="AGE" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">อายุ</label>
                    <select id="AGE" name="AGE" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
                        <option selected>เลือก</option>
                        <option value="001">15-20 ปี</option>
                        <option value="002">21-25 ปี</option>
                        <option value="003">26-30 ปี</option>
                        <option value="004">31-35 ปี</option>
                        <option value="005">36-40 ปี</option>
                        <option value="006">41-45 ปี</option>
                        <option value="007">46-50 ปี</option>
                        <option value="008">51-60 ปี</option>
                        <option value="009">มากกว่า 60 ปี</option>
                    </select>
                </div> 
                <div>
                    <label for="PHONE" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">เบอร์โทร</label>
                    <input type="tel" id="PHONE" name="PHONE" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                </div>
                <div>
                    <label for="SOCIAL" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Line/fackbook/อื่นๆ</label>
                    <input type="text" id="SOCIAL" name="SOCIAL" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                </div>
            </div>

            {{-- Part 2 --}}
            <div class="text-center text-xl p-5  bg-yellow-200 mb-2 shadow-md">
                <div class="text-center text-sm">เมื่อท่านสำเร็จการศึกษาจาก กศน.แล้ว ท่านได้นำความรู้ / วุฒิการศึกษาไปใช้ในด้านใดบ้างโปรดกรอกข้อมูลตามความเป็นจริง</div>
            </div>
            <div class="grid gap-6 mb-6 md:grid-cols-2 p-4 shadow-md">
                <div>
                    <label for="LV_UP" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ใช้ศึกษาต่อในระดับที่สูงขึ้น</label>
                    <select id="LV_UP" name="LV_UP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
                        <option selected>เลือก</option>
                        <option value="มัธยมศึกษาตอนต้น">มัธยมศึกษาตอนต้น</option>
                        <option value="มัธยมศึกษาตอนปลาย">มัธยมศึกษาตอนปลาย</option>
                        <option value="ปวช">ปวช.</option>
                        <option value="ปวส">ปวส.</option>
                        <option value="ปริญาตรี">ปริญาตรี</option>
                    </select>
                </div> 
                <div>
                    <label for="LV_CONT" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ชื่อและสถานที่ ศึกษาต่อ</label>
                    <input type="text" id="LV_CONT" name="LV_CONT" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div>
                    <label for="CAREER" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ใช้ประกอบอาชีพ</label>
                    <select id="CAREER" name="CAREER" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
                        <option selected>เลือก</option>
                        <option value="พนักงาน/ลูกจ้างโรงาน">พนักงาน/ลูกจ้างโรงาน</option>
                        <option value="รับจ้างทั่วไป">รับจ้างทั่วไป</option>
                        <option value="ลูกจ้างหน่วยงานรัฐ">ลูกจ้างหน่วยงานรัฐ</option>
                        <option value="ผู้นำท้องถื่น">ผู้นำท้องถื่น(กำนัน ผู้ใหญ่บ้าน อบต อบจ)</option>
                        <option value="ผู้นำศาสนา">ผู้นำศาสนา</option>
                        <option value="ข้าาราชการ/เจ้าหน้าที่ของรัฐ">ข้าาราชการ/เจ้าหน้าที่ของรัฐ</option>
                        <option value="พนักงานเอกชน">พนักงานเอกชน</option>
                        <option value="ธุรกิจส่วนตัว">ธุรกิจส่วนตัว</option>
                    </select>
                </div> 
                <div>
                    <label for="CAREER_CONT" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ชื่อและสถานที่ ประกอบอาชีพ</label>
                    <input type="text" id="CAREER_CONT" name="CAREER_CONT" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                </div>
                <div>
                    <label for="SALA_UP" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ใช้ปรับตำแหน่ง/เพิ่มเงินเดือน</label>
                    <select id="SALA_UP" name="SALA_UP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
                        <option selected>เลือก</option>
                        <option value="FR">ปรับตำแหน่ง</option>
                        <option value="DE">เพิ่มเงินเดือน</option>
                    </select>
                </div> 
                <div>
                    <label for="SALA_CONT" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ชื่อและสถานที่ ปรับตำแหน่ง/เพิ่มเงินเดือน</label>
                    <input type="text" id="SALA_CONT" name="SALA_CONT" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                </div>
            </div>

            {{-- Part 3 --}}
            <div class="text-center text-xl p-5  bg-yellow-200 mb-2 shadow-md">
                <div class="text-center text-sm">ประโยชน์ที่ได้รับจากการเรียน กศน.</div>
            </div>
            <div class="grid gap-6 mb-6 md:grid-cols-2 p-4 shadow-md">
                <div class="text-center text-xs">ท่านสามารถนำความรู้ที่ได้รับจากการศึกษาของ กศน.ไปใช้ในการทำงานได้ในระดับใด</div>
                <div class="flex justify-between">
                    <div class="flex items-center mr-4">
                        <input id="BENEFIT_1" type="radio" value="1" name="BENEFIT_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                        <label for="BENEFIT_1" name="BENEFIT_1" class="ml-2 text-sm font-medium text-gray-900">1</label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input id="BENEFIT_1" type="radio" value="2" name="BENEFIT_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  ">
                        <label for="BENEFIT_1" name="BENEFIT_1" class="ml-2 text-sm font-medium text-gray-900 ">2</label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input id="BENEFIT_1" type="radio" value="3" name="BENEFIT_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  ">
                        <label for="BENEFIT_1" name="BENEFIT_1" class="ml-2 text-sm font-medium text-gray-900 ">3</label>
                    </div>
                    <div class="flex items-center">
                        <input id="BENEFIT_1" type="radio" value="4" name="BENEFIT_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  ">
                        <label for="BENEFIT_1" name="BENEFIT_1" class="ml-2 text-sm font-medium text-gray-900">4</label>
                    </div>
                    <div class="flex items-center">
                        <input checked id="BENEFIT_1" type="radio" value="5" name="BENEFIT_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  ">
                        <label for="BENEFIT_1" name="BENEFIT_1" class="ml-2 text-sm font-medium text-gray-900">5</label>
                    </div>
                </div>              
            </div>
            <div class="grid gap-6 mb-6 md:grid-cols-2 p-4 shadow-md">
                <div class="text-center text-xs">ความพึงพอใจโดยรวมในการจัดการศึกษาระดับการศึกษาขั้นพื้นฐานของ กศน.</div>
                <div class="flex justify-between">
                    <div class="flex items-center mr-4">
                        <input id="BENEFIT_2" type="radio" value="1" name="BENEFIT_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                        <label for="BENEFIT_2" name="BENEFIT_2" class="ml-2 text-sm font-medium text-gray-900">1</label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input id="iBENEFIT_2" type="radio" value="2" name="BENEFIT_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  ">
                        <label for="BENEFIT_2" name="BENEFIT_2" class="ml-2 text-sm font-medium text-gray-900 ">2</label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input id="BENEFIT_2" type="radio" value="3" name="BENEFIT_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  ">
                        <label for="BENEFIT_2" name="BENEFIT_2" class="ml-2 text-sm font-medium text-gray-900 ">3</label>
                    </div>
                    <div class="flex items-center">
                        <input id="BENEFIT_2" type="radio" value="4" name="BENEFIT_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  ">
                        <label for="BENEFIT_2" name="BENEFIT_2" class="ml-2 text-sm font-medium text-gray-900">4</label>
                    </div>
                    <div class="flex items-center">
                        <input checked id="BENEFIT_2" type="radio" value="5" name="BENEFIT_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  ">
                        <label for="iBENEFIT_2" name="BENEFIT_2" class="ml-2 text-sm font-medium text-gray-900">5</label>
                    </div>
                </div>  
            </div>

            {{-- Part 4 --}}
            <div class="text-center text-xl p-5  bg-yellow-200 mb-2 shadow-md">
                <div class="text-center text-sm">ข้อมูลอื่นที่เป็นประโยชน์-ข้อเสนอแนะ</div>
            </div>
            <div class="grid gap-6 mb-6 md:grid-cols-2 p-4 shadow-md">
                <div>
                    <label for="ABI" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ท่านมีความถนัด</label>
                    <input type="text" id="ABI" name="ABI" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "  >
                </div>      
                <div>
                    <label for="WORK_WANT" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ท่านมีความต้องการทำงานเกี่ยวกับ</label>
                    <input type="text" id="WORK_WANT" name="WORK_WANT" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
                </div> 
                <div>
                    <label for="ABI_WANT" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ท่านมีความต้องการเข้ารับการพัฒนาตนเองเพื่อประกอบอาชีพในด้านใด</label>
                    <input type="text" id="ABI_WANT" name="ABI_WANT" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  " >
                </div> 
                <div>
                    <label for="IDEA" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ความคิดเห็น/ข้อเสนอแนะ</label>
                    <input type="text" id="IDEA" name="IDEA" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "  >
                </div>  
            </div>

            <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                <input id="remember" type="checkbox" required value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"  >
                </div>
                <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">ยินยอมให้ข้อมูล <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">เงื่อนไขการนำข้อมูลไปใช้</a>.</label>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">ส่งแบบฟอร์ม</button>
        </form>
    </section>
    
</x-help-layout>
<script>
    function previewImage(event) {
        var input = event.target;
        var reader = new FileReader();

        reader.onload = function(){
            var preview = document.getElementById('preview');
            preview.src = reader.result;
            preview.style.display = 'block';
        };

        reader.readAsDataURL(input.files[0]);
    }
</script>
