<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Faker\Factory as Faker;

class StudentController extends Controller
{

    function insert(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');

        // $date_stamp = date('y-m-d H:i:s');
        $faker = Faker::create();

        $insertstu = Student::insert([
            'email' => $faker->unique()->safeEmail,
            'phone' => $faker->phoneNumber,
            'password' => bcrypt('secret'),
            'confirm_password' => bcrypt('secret'),
            'stu_image' => $faker->imageUrl(),
            'prefix' => $faker->title,
            'firs_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'nickname' => $faker->userName,
            'birthday' => $faker->date,
            'lineid' => $faker->userName,
            'address' => $faker->address,
            'register_at' => $faker->dateTimeThisMonth,
        ]);

        // $insertstu = Student::insert([
        //     'email' => $request->input('email'),
        //     'phone' => $request->input('phone'),
        //     'password' => $request->input('password'),
        //     'confirm_password' => $request->input('confirm_password'),
        //     'stu_image' => $request->input('stu_image'),
        //     'prefix' => $request->input('prefix'),
        //     'firs_name' => $request->input('firs_name'),
        //     'last_name' => $request->input('last_name'),
        //     'nickname' => $request->input('nickname'),
        //     'birthday' => $request->input('birthday'),
        //     'lineid' => $request->input('lineid'),
        //     'address' => $request->input('address'),
        //     'register_at' => $request->input('register_at'),
        // ]);

        return $insertstu ? 'Data inserted successfully' : 'Data insertion failed';
    }
    function update(Request $request)
    {

        date_default_timezone_set('Asia/Bangkok');

        $faker = Faker::create();
        $id = $faker->numberBetween(1, 100);

        $editstu = Student::where('id', '=', $id)->update([
            'email' => $faker->unique()->safeEmail,
            'phone' => $faker->phoneNumber,
            'password' => bcrypt('secret'),
            'confirm_password' => bcrypt('secret'),
            'stu_image' => $faker->imageUrl(),
            'prefix' => $faker->title,
            'firs_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'nickname' => $faker->userName,
            'birthday' => $faker->date,
            'lineid' => $faker->userName,
            'address' => $faker->address,
            'register_at' => $faker->dateTimeThisMonth,

        ]);
        return $editstu ? 'Data edittutor successfully' : 'Data edittutor failed';
    }
}
