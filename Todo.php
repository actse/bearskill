<?php

use App\Models\Student;

Teacher :{
Login.vue
    -> line login
    -> google login
    -> simple login
        -> form input Sigin
            1.หากมีอยู่ในระบบอยู่แล้วจะเข้าสู่หน้า HOME.vue
            2.หากยังไม่มีในระบบ จะทำการลิ้งไปยังหน้า สมัครสมาชิกครูก่อน

็Profile.vue
    -> แสดงข้อมูลโปรไฟล์ครูท่านนั้น˝
        -> แบบ box card
    -> สามารถแก้ไขโปรไฟล์ได้
        -> input form
    -> สามารถเพิ่มคอสเรียน หรือ รายวิชาที่สอนได้
        -> ข้อมูลที่เก็บ
            subject_name
            type_group
            date_time
            price
            location
    -> สามารถเพิ่มประวัติการศึกษาได้
    -> สามารถเพิ่มประวัติการทำงานได้
    -> ส่วนเสริมสามารถเพิ่ม ในส่วนของรูปภาพต่างๆ หรือ ผลงานที่ทำได้ เช่น
        เกิยตนิยม , ใบประกาศต่างๆ ,ผลงานต่างประเทศ , ผลการแข่งขัน

    -> create alert || feedback
        -> refesh page or link new page

    -> แบบสอบถามสำหรับวัดระดับความเข้าใจในระบบของ BearSkill มากน้อยแค่ไหน
        - เช่น  -> คำถาม
               -> การเพื่มข้อมูลต่างๆในระบบ
               -> การเปิดปิดใช้งานฟังชั่นต่างๆในระบบ

ConfigProfile.vue
    -> create alert || feedback
        -> refesh page or link new page
    -> checked progress bar
Billing.vue
    -> create alert || feedback
        -> refesh page or link to page PaymentCredit.vue

PaymentCredit.vue
    -> create form box show data company payment
        -> account number bank
        -> qr code image
        -> detail company

    -> create form payment
        -> bank name
        -> price
        -> imge_slip
        -> alert message
        -> datetime

    -> send data to line admin
        - ท่าน xxxxx
        ชำระเงินผ่าน ธนาคาร xxxxx
        จำนวนเงิน xxx
        เวลา xx.xx.xx xx/xx/xxxx
        กรุณาตรวจสอบ

->history_payment.vue -> admin
    -> form select การเติมเงินเข้าสู้ระบบ
        -> สามารถแก้ไขสถานะได้
        -> คลิ้กเปลี่ยนสถานะ และเติมเงินเข้าสู้บัญชีนั้นได้เลย

-> แยกประวัติรายการเครดิต
    -> ประวัติการเติมเครดิต
        form table แสดงรายละเอียดทั้งหมด เช่น
        - เติมเมื่อไหร่ เท่าไหร่ ยอดรวม ใบสลิป สถานะ
    -> ประวิตการหักเครดิต
        -> ทำไห้เข้าถึงยากหน่อย
        form table แสดงรายละเอียดทั้งหมด
        - หักเมื่อไหร่ เท่าไหร่ ยอดรวม สถานะ

-> หน้า ตั้งค่าการโปรโมทของ teacher
    -> หากต้องการโปรโมท มากกว่า 0 ต้องเติม credit ก่อน
        -> payment credit > 0 ต้องมากกว่า 0
            -> จะเชื่อมไปยังหน้า addcredit เพื่อไห้ teacher สามารถเพิ่มเรท โปรโมทได้
    -> สามารถ เปิด/ปิด ฟังชั่นโปรโมทได้
        -> เปิด นส จะสามารถเห็นรายวิชา หรือ รายการสอนของท่านทั้งหมด
        -> ปิด จะไม่แสดงรายวิชาที่ท่านเพิ่มลงได้ไปทั้งหมด

    -> สามารถกำหนดเป็น 0 บาทได้
    -> ระบบจะแสดงตามลำดับ การโปรโมทของ teacher
    -> ยื่งจำนวนเงิน โปรโมทเยอจะได้รับการมองเห็น รายการสอนแก่ นศ ไดดียิ่งขึ้น
    -> แต่ราคาค่าหักจากการที่ นส ดูข้อมูลก็จะสูงตาม ราคาโปรโมท เช่นกัน
        -> ตัวอย่าง โปรโมท 20 โดนหักเงิน 20, หาก โปรโมท 0 บาท อัตราค่าหัก = 0 บาท
}

Studen : {
    -> create function Login Student
        -> line login
        -> google login
        -> simple login
            -> form input Sigin
                - phone number
                    1.หากยังไม่มีในระบบ จะทำไห้ส่งรหัส OTP เพื่อยืนยันตัวตน

    -> create function สำหรับของ teacher หากสนใจเรียนกับครูท่านนี้
        -> form สำหรับกรอกเบอร์โทรเพิ่มรับรหัส OTP ยืนยันตัวตน
        -> form สำหรับกรอก รหัส OTP
        -> หลักจากยืนยันตัวตนเรียบร้อยแล้ว
            -> แสดงรายละเอียดข้อมูลการติดต่อ , รอท่านครูติดต่อกลับมาก็ได้เช่นกัน
            -> หากเคยกดเข้ามาดูวิชาหรือครุท่านนี้เคยดูแล้ว สามารถเข้ามาดูได้ใหม่จนกว่าจะครบ 1 ปี

    -> create function สำหรับโพสรายวิชาที่ต้องการหา ครูสอนพิเศษ
        - insert form Post & update form Post
            - ข้อมูลที่เก็บ
                -> name ชื่อเรียก
                -> subject_detail เช่น วิชาไฟฟ้า เรื่อง การนำกระแสไฟฟ้า
                -> price ราคาที่สามารถจ่ายได้ เช่น ชั่วโมงละ 50 , 100, 150
                -> date วันที่ต้องการ เช่น จันทร์, อังคาร, เสาร์
                    -> อย่างน้อยต้องกรอกสักอย่างนึงเพื่อจะได้ติดต่อได้
                        - phone สำหรับไห้ทางคุณครู ติดต่อมา เช่น 0899999999
                        - line_id สำหรับไห้ทางคุณครู ติดต่อมา เช่น basstsu1234
                -> status_post คือ สถานะของ โพสต์ นั้นๆ เช่น
                    - active = เปิดโพสต์
                    - unactive = ปิดโพสต์
}


// -> code send sms

// $array_message = "CAREMAT Hub บริการคำปรึกษาออนไลน์
// จองบริการสำเร็จ รอเจ้าหน้าที่ยืนยันนัดอีกครั้ง
// สอบถามเพิ่มเติมเบอร์ {$clinic_phone} ";

//         $postfields = json_encode([
//             "sender" => "CAREMAT",
//             "msisdn" => ["{$phone}"],
//             "message" => "{$array_message}"
//         ], JSON_UNESCAPED_UNICODE);

//         // echo $postfields;
//         // die();

//         $curl = curl_init();

//         $api_key = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC90aHNtcy5jb21cL2FwaS1rZXkiLCJpYXQiOjE2NTAzNTc4MTYsIm5iZiI6MTY1MDM1NzgxNiwianRpIjoiVVR4ZFRzZVNCUDZkckFneCIsInN1YiI6MTAyODgyLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.XjoZYOUgj-kJNAGkmByecyuLosWLGvNpQixgmp3KJVA";

//         curl_setopt_array($curl, array(
//             CURLOPT_URL => 'https://thsms.com/api/send-sms',
//             CURLOPT_RETURNTRANSFER => true,
//             CURLOPT_ENCODING => '',
//             CURLOPT_MAXREDIRS => 10,
//             CURLOPT_TIMEOUT => 0,
//             CURLOPT_FOLLOWLOCATION => true,
//             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//             CURLOPT_CUSTOMREQUEST => 'POST',
//             CURLOPT_POSTFIELDS => $postfields,
//             CURLOPT_HTTPHEADER => array(
//                 'Authorization: Bearer ' . $api_key,
//                 'Content-Type: application/json'
//             ),
//         ));

//         $response = curl_exec($curl);

//         curl_close($curl);
