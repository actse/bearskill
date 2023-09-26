<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\Tutor_addsubjects;
use App\Models\Type_subject;
use App\Models\User;


use Faker\Factory as Faker;


class TutorController extends Controller
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

    function edit_profile(Request $request)
    {

        date_default_timezone_set('Asia/Bangkok');

        $faker = Faker::create();
        $id = $faker->numberBetween(1, 100);

        $edittutor = Tutor::where('id', '=', $id)->update([
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
        ]);
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
}
