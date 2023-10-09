<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\Tutor_addsubjects;
use App\Models\Type_subject;
use App\Models\User;
use App\Models\Users;
use App\Models\Verifly_otp;
use App\Models\Personal_information;



use Faker\Factory as Faker;


class UserController extends Controller
{
    // public function insert(Request $request)
    // {
    //     date_default_timezone_set('Asia/Bangkok');

    //     // $faker = Faker::create();

    //     $inserttutor = User::insert([
    //         'email' => $request->input('email'),
    //         'password' => Hash::make($request->input('password')),
    //         'confirm_password' => Hash::make($request->input('confirm_password')),
    //         'register_at' => now(),
    //         'status_account' => 'teacher',
    //         'created_at' => now(),

    //     ]);

    //     // $inserttutor = Tutor::insert([
    //     //     'email' => $faker->unique()->safeEmail,
    //     //     'password' => bcrypt('secret'),
    //     //     'confirm_password' => bcrypt('secret'),
    //     //     'register_at' => now(),
    //     //     'status_account' => 'active',
    //     //     'created_at' => now(),
    //     // ]);

    //     return $inserttutor ? 'Data inserted successfully' : 'Data inserted failed';
    // }

    function insertContact(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');
        $verifly = Users::where('id', '=', $request->input('id'))->update([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),

        ]);

        Personal_information::insert([
            'users_id' => $request->input('id'),
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
        $selectdata = Users::where('id', '=', $id)->first();
        return response()->json($selectdata);
    }

    function selectdata(Request $request)
    {
        $id = $request->input('id');

        $userData = Personal_information::join('users', 'personal_information.users_id', '=', 'users.id')
            ->select(
                'personal_information.*',
                'users.*',
            )
            ->where('users.id', '=', $id)
            ->first();

        // return response()->json(['userData' => $userData]);
        return response()->json($userData);
    }

    function edit_profile(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');


        if ($request->input('name') != null && $request->input('phone') != null) {

            Users::where('id', '=', $request->input('id'))->update([
                // 'teacher_image' => $faker->imageUrl(),
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
            ]);
        }

        $editeacher = personal_information::where('id', '=', $request->input('id'))->update([
            // 'teacher_image' => $faker->imageUrl(),
            'birthday' => $request->input('birthday'),
            'lineid' => $request->input('lineid'),
            'instagram' => $request->input('instagram'),
            'address' => $request->input('address'),
            'graduation_status' => $request->input('graduation_status'),
            'graduation_year' => $request->input('graduation_year'),
            'graduation_univercity' => $request->input('graduation_univercity'),
            'graduation_faculty' => $request->input('graduation_faculty'),
            'graduation_major' => $request->input('graduation_major'),
            'graduation_gpax' => $request->input('graduation_gpax'),
            'graduation_reference_documents' => $request->input('bachelor_reference_documents'),
            'education_level' => $request->input('education_level'),
            'location_teaching' => $request->input('location_teaching'),
            'teaching_experience' => $request->input('teaching_experience'),
            'teaching_experience_year' => $request->input('teaching_experience_year'),
            'teaching_experience_detail' => $request->input('teaching_experience_detail'),
            'work_experience' => $request->input('work_experience'),
            'we_more_detail' => $request->input('we_more_detail'),
        ]);

        return $editeacher ? 'Data edittutor successfully' : 'Data edittutor failed';
    }


    function insert_subjects(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');

        $faker = Faker::create();

        $insertsubjects = Tutor_addsubjects::insert([
            'users_id' => $request->input('users_id'),
            'type_subject_id' => $request->input('type_subject_id'),
            'detail' => $request->input('detail'),
            'location_teaching' => $request->input('location_teaching'),
            'date_teaching' => $request->input('date_teaching'),
            'type_teaching' => $request->input('type_teaching'),
            'subjects' => $request->input('subjects'),
            'price' => $request->input('price'),
            'status' => Str::random()(['active', 'inactive']),
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
