<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\Tutor_addsubjects;
use App\Models\Type_subject;
use App\Models\User;
use App\Models\Users;
use App\Models\Verifly_otp;



use Faker\Factory as Faker;


class UserController extends Controller
{
    public function insert(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');

        // $faker = Faker::create();

        $inserttutor = User::insert([
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'confirm_password' => Hash::make($request->input('confirm_password')),
            'register_at' => now(),
            'status_account' => 'teacher',
            'created_at' => now(),

        ]);

        // $inserttutor = Tutor::insert([
        //     'email' => $faker->unique()->safeEmail,
        //     'password' => bcrypt('secret'),
        //     'confirm_password' => bcrypt('secret'),
        //     'register_at' => now(),
        //     'status_account' => 'active',
        //     'created_at' => now(),
        // ]);

        return $inserttutor ? 'Data inserted successfully' : 'Data inserted failed';
    }

    function insertContact(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');
        $verifly = Users::where('id', '=', $request->input('id'))->update([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),

        ]);
        return $verifly ? 'Verifly Account successfully' : 'Verifly Account failed';
    }

    function insertDetail(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');
        $verifly = Users::where('id', '=', $request->input('id'))->update([
            'detailsimple' => $request->input('detail_data'),

        ]);
        return $verifly ? 'insert data detai simple successfully' : 'insert data detai simple failed';
    }

    function select_data(Request $request)
    {
        $id = $request->input('id');
        $selectdata = Users::where('id','=', $id)->first();
        return response()->json($selectdata);
    }

    function edit_profile(Request $request)
    {

        date_default_timezone_set('Asia/Bangkok');

        $faker = Faker::create();
        // $id = $faker->numberBetween(1, 100);

        $edittutor = User::where('email', '=', $request->input('email'))->update([
            // 'teacher_image' => $faker->imageUrl(),
            'prefix' => $request->input('prefix'),
            'firs_name' => $request->input('firs_name'),
            'last_name' => $request->input('last_name'),
            'nickname' => $request->input('nickname'),
            'birthday' => $request->input('birthday'),
            'phone' => $request->input('phone'),
            'lineid' => $request->input('lineid'),
            'address' => $request->input('address'),
            'idcard_image' => $request->input('idcard_image'),
            'reference_person_name' => $request->input('reference_person_name'),
            'reference_person_phone' => $request->input('reference_person_phone'),
            'reference_person_relationship' => $request->input('reference_person_relationship'),
            'graduation_status' => $request->input('graduation_status'),
            'bachelor_status' => $request->input('bachelor_status'),
            'bachelor_year' => $request->input('bachelor_year'),
            'bachelor_univercity' => $request->input('bachelor_univercity'),
            'bachelor_faculty' => $request->input('bachelor_faculty'),
            'bachelor_major' => $request->input('bachelor_major'),
            'bachelor_gpax' => $request->input('bachelor_gpax'),
            'bachelor_reference_documents' => $request->input('bachelor_reference_documents'),
            'master_status' => $request->input('master_status'),
            'master_year' => $request->input('master_year'),
            'master_univercity' => $request->input('master_univercity'),
            'master_faculty' => $request->input('master_faculty'),
            'master_major' => $request->input('master_major'),
            'master_gpax' => $request->input('master_gpax'),
            'master_reference_documents' => $request->input('master_reference_documents'),
            'doctoral_status' => $request->input('doctoral_status'),
            'doctoral_year' => $request->input('doctoral_year'),
            'doctoral_univercity' => $request->input('doctoral_univercity'),
            'doctoral_faculty' => $request->input('doctoral_faculty'),
            'doctoral_major' => $request->input('doctoral_major'),
            'doctoral_gpax' => $request->input('doctoral_gpax'),
            'doctoral_reference_documents' => $request->input('doctoral_reference_documents'),
            'education_level' => $request->input('education_level'),
            'location_teaching' => $request->input('location_teaching'),
            'teaching_experience' => $request->input('teaching_experience'),
            'teaching_experience_year' => $request->input('teaching_experience_year'),
            'teaching_experience_detail' => $request->input('teaching_experience_detail'),
            'work_experience' => $request->input('work_experience'),
            'we_more_detail' => $request->input('we_more_detail'),
        ]);

        // $edittutor = User::where('email', '=', $request->input('email'))->update([
        //     'teacher_image' => $faker->imageUrl(),
        //     'prefix' => $faker->title,
        //     'firs_name' => $faker->firstName,
        //     'last_name' => $faker->lastName,
        //     'nickname' => $faker->userName,
        //     'birthday' => $faker->date,
        //     'phone' => $faker->phoneNumber,
        //     'lineid' => $faker->userName,
        //     'address' => $faker->address,
        //     'idcard_image' => $faker->imageUrl(),
        //     'reference_person_name' => $faker->name,
        //     'reference_person_phone' => $faker->phoneNumber,
        //     'reference_person_relationship' => $faker->word,
        //     'graduation_status' => $faker->boolean,
        //     'bachelor_status' => $faker->boolean,
        //     'bachelor_year' => $faker->year,
        //     'bachelor_univercity' => $faker->company,
        //     'bachelor_faculty' => $faker->word,
        //     'bachelor_major' => $faker->word,
        //     'bachelor_gpax' => $faker->randomFloat(2, 2, 4),
        //     'bachelor_reference_documents' => $faker->imageUrl(),
        //     'master_status' => $faker->boolean,
        //     'master_year' => $faker->year,
        //     'master_univercity' => $faker->company,
        //     'master_faculty' => $faker->word,
        //     'master_major' => $faker->word,
        //     'master_gpax' => $faker->randomFloat(2, 2, 4),
        //     'master_reference_documents' => $faker->imageUrl(),
        //     'doctoral_status' => $faker->boolean,
        //     'doctoral_year' => $faker->year,
        //     'doctoral_univercity' => $faker->company,
        //     'doctoral_faculty' => $faker->word,
        //     'doctoral_major' => $faker->word,
        //     'doctoral_gpax' => $faker->randomFloat(2, 2, 4),
        //     'doctoral_reference_documents' => $faker->imageUrl(),
        //     'education_level' => $faker->word,
        //     'location_teaching' => $faker->word,
        //     'teaching_experience' => $faker->text,
        //     'teaching_experience_year' => $faker->randomNumber(2),
        //     'teaching_experience_detail' => $faker->text,
        //     'work_experience' => $faker->text,
        //     'we_more_detail' => $faker->text,
        // ]);
        return $edittutor ? 'Data edittutor successfully' : 'Data edittutor failed';
    }

    function suspend_account(Request $request)
    {

        date_default_timezone_set('Asia/Bangkok');

        $faker = Faker::create();
        $id = $faker->numberBetween(1, 100);

        $edittutor = Tutor::where('id', '=', $id)->update([
            'email' => $faker->unique()->safeEmail,
            'password' => bcrypt('secret'),
            'confirm_password' => bcrypt('secret'),
            'teacher_image' => $faker->imageUrl(),
            'prefix' => $faker->title,
            'firs_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'nickname' => $faker->userName,
            'birthday' => $faker->date,
            'phone' => $faker->phoneNumber,
            'lineid' => $faker->userName,
            'address' => $faker->address,
            'idcard_image' => $faker->imageUrl(),
            'reference_person_name' => $faker->name,
            'reference_person_phone' => $faker->phoneNumber,
            'reference_person_relationship' => $faker->word,
            'graduation_status' => $faker->boolean,
            'bachelor_status' => $faker->boolean,
            'bachelor_year' => $faker->year,
            'bachelor_univercity' => $faker->company,
            'bachelor_faculty' => $faker->word,
            'bachelor_major' => $faker->word,
            'bachelor_gpax' => $faker->randomFloat(2, 2, 4),
            'bachelor_reference_documents' => $faker->imageUrl(),
            'master_status' => $faker->boolean,
            'master_year' => $faker->year,
            'master_univercity' => $faker->company,
            'master_faculty' => $faker->word,
            'master_major' => $faker->word,
            'master_gpax' => $faker->randomFloat(2, 2, 4),
            'master_reference_documents' => $faker->imageUrl(),
            'doctoral_status' => $faker->boolean,
            'doctoral_year' => $faker->year,
            'doctoral_univercity' => $faker->company,
            'doctoral_faculty' => $faker->word,
            'doctoral_major' => $faker->word,
            'doctoral_gpax' => $faker->randomFloat(2, 2, 4),
            'doctoral_reference_documents' => $faker->imageUrl(),
            'education_level' => $faker->word,
            'location_teaching' => $faker->word,
            'teaching_experience' => $faker->text,
            'teaching_experience_year' => $faker->randomNumber(2),
            'teaching_experience_detail' => $faker->text,
            'work_experience' => $faker->text,
            'we_more_detail' => $faker->text,
            'status_account' => 'not active',
        ]);
        return $edittutor ? 'Data edittutor successfully' : 'Data edittutor failed';
    }

    function insert_subjects(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');

        $faker = Faker::create();

        $insertsubjects = Tutor_addsubjects::insert([
            'teacher_id' => $faker->numberBetween(1, 100),
            'type_subject_id' => $faker->numberBetween(1, 100),
            'detail' => $faker->text,
            'location_teaching' => $faker->address,
            'date_teaching' => $faker->date,
            'type_teaching' => $faker->word,
            'subjects' => $faker->word,
            'price' => $faker->randomNumber(6),
            'status' => $faker->randomElement(['active', 'inactive']),
            'addsubjects_at' => now(),
        ]);

        // $insertsubjects = Tutor_addsubjects::insert([
        //     'teacher_id' => $request->input('teacher_id'),
        //     'detail' => $request->input('detail'),
        //     'location_teaching' => $request->input('location_teaching'),
        //     'date_teaching' => $request->input('date_teaching'),
        //     'type_teaching' => $request->input('type_teaching'),
        //     'subjects' => $request->input('subjects'),
        //     'price' => $request->input('price'),
        //     'status' => $request->input('status'),
        //     'addsubjects_at' => $request->input('addsubjects_at'),
        // ]);

        return $insertsubjects ? 'Data inserted successfully' : 'Data insertion failed';
    }

    function insert_type_subjects(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');

        $faker = Faker::create();

        $inserttypesubjects = Type_subject::insert([
            'type_name' => $faker->text,
            'created' => now(),
        ]);

        // $inserttypesubjects = Type_subject::insert([
        //     'type_name' => $faker->text,
        //     'created' => now(),
        // ]);

        return $inserttypesubjects ? 'Data inserted successfully' : 'Data insertion failed';
    }

    function verifly_account(Request $request)
    {
        $user = Users::where('email', '=', $request->input('email'))
            ->where('phone', '=', $request->input('phone'))
            ->first();

        $phone = $request->input('phone');
        // ตรวจสอบว่าพบผู้ใช้หรือไม่
        if ($user) {
            $otpCode = rand(100000, 999999);

            $verifly = Verifly_otp::insert([
                'users_id' => $user->id, // ใช้ $user->id เพื่อดึงค่า id
                'otpcode' => $otpCode,
                'verifly_at' => now(),
                'verifly_expired' => now()->addMinutes(5),
                'created_at' => now(),
            ]);

            //             $array_message = "รหัส (OTP) ของท่านคือ {$otpCode}
            // ซึ่งรหัส OTP นี้มีอายุการใช้งาน 5 นาทีเท่านั้น
            // กรุณายืนยันตัวตนภายในเวลาที่กำหนด";

            //             $postfields = json_encode([
            //                 "sender" => "CAREMAT",
            //                 "msisdn" => ["{$phone}"],
            //                 "message" => "{$array_message}"
            //             ], JSON_UNESCAPED_UNICODE);

            //             $curl = curl_init();

            //             $api_key = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC90aHNtcy5jb21cL2FwaS1rZXkiLCJpYXQiOjE2NTAzNTc4MTYsIm5iZiI6MTY1MDM1NzgxNiwianRpIjoiVVR4ZFRzZVNCUDZkckFneCIsInN1YiI6MTAyODgyLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.XjoZYOUgj-kJNAGkmByecyuLosWLGvNpQixgmp3KJVA";

            //             curl_setopt_array($curl, array(
            //                 CURLOPT_URL => 'https://thsms.com/api/send-sms',
            //                 CURLOPT_RETURNTRANSFER => true,
            //                 CURLOPT_ENCODING => '',
            //                 CURLOPT_MAXREDIRS => 10,
            //                 CURLOPT_TIMEOUT => 0,
            //                 CURLOPT_FOLLOWLOCATION => true,
            //                 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            //                 CURLOPT_CUSTOMREQUEST => 'POST',
            //                 CURLOPT_POSTFIELDS => $postfields,
            //                 CURLOPT_HTTPHEADER => array(
            //                     'Authorization: Bearer ' . $api_key,
            //                     'Content-Type: application/json'
            //                 ),
            //             ));

            //             $response = curl_exec($curl);

            //             curl_close($curl);


            return $verifly ? 'Verifly OTP successfully' : 'Verifly OTP failed';
        } else {
            return 'User not found';
        }
    }
    function updata_status_verifly(Request $request)
    {
        $checkotp = Verifly_otp::where('users_id', '=', $request->input('id'))
            ->where('otpcode', '=', $request->input('otpnumber'))
            ->where('verifly_expired', '>', now())
            ->first();

        if ($checkotp) {

            $verifly = Users::where('id', '=', $checkotp->users_id)->update([
                'verifly_account' => 'active'
            ]);
            return $verifly ? 'Verifly Account successfully' : 'Verifly Account failed';
        } else {
            return 'User not found';
        }
    }
}