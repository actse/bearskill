<?php

$array_message = "CAREMAT Hub บริการคำปรึกษาออนไลน์
จองบริการสำเร็จ รอเจ้าหน้าที่ยืนยันนัดอีกครั้ง
สอบถามเพิ่มเติมเบอร์ {$clinic_phone} ";

        $postfields = json_encode([
            "sender" => "CAREMAT",
            "msisdn" => ["{$phone}"],
            "message" => "{$array_message}"
        ], JSON_UNESCAPED_UNICODE);

        // echo $postfields;
        // die();

        $curl = curl_init();

        $api_key = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC90aHNtcy5jb21cL2FwaS1rZXkiLCJpYXQiOjE2NTAzNTc4MTYsIm5iZiI6MTY1MDM1NzgxNiwianRpIjoiVVR4ZFRzZVNCUDZkckFneCIsInN1YiI6MTAyODgyLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.XjoZYOUgj-kJNAGkmByecyuLosWLGvNpQixgmp3KJVA";

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://thsms.com/api/send-sms',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $postfields,
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $api_key,
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
